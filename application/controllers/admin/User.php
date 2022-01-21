<?php

class User extends Admin_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        //Fetch all users
        $this->data['users']=$this->User_m->get();
        //load view
        $this->data['subview'] ='admin/User/index';
        $this->load->view('admin/_layout_main',$this->data);

    }
    public function edit($id=NULL)
    {
        //fetch a user or set new one
       if($id){
            $this->data['user']=$this->User_m->get($id);
                                        //$this->data['errors'][] he work it
            count($this->data['user'])||$this->data['errors'][]='User could not be found';
       }else{
           $this->data['user']=$this->User_m->get_new();
       }

       //Set up the form
        $rules=$this->User_m->rules_admin;
        $id||$rules['password']["rules"].='|required';
        $this->form_validation->set_rules($rules);

        //process the form
        if($this->form_validation->run() == TRUE){
            $data=$this->User_m->array_from_post(array('name','email','password'));
            $data['password']=$this->User_m->hash( $data['password']);
            $this->User_m->save($data,$id);
            redirect('admin/User');
        }

        //Load the view
        $this->data['subview'] ='admin/User/edit';
        $this->load->view('admin/_layout_main',$this->data);

    }
    public function delete($id){

        $this->User_m->delete($id);
        redirect('admin/User');

    }

    public function login(){
        //Redirect a user if he`s already logged in
        $dashboard='admin/Dashboard';
        $this->User_m->loggedin() == FALSE || redirect($dashboard);

        //Set form
        $rules=$this->User_m->rules;
        $this->form_validation->set_rules($rules);

        //Process form
        if($this->form_validation->run() == TRUE){

            //We can login and redirect
            if($this->User_m->login() == TRUE){

                redirect($dashboard);
            }
            else{
                $this->session->set_flashdata('error','That email/password combination does not exist');
                redirect('admin/User/login','refresh');
            }


        }


        //Load view
        $this->data['subview']='admin/User/login';
        $this->load->view('admin/_layout_modal',$this->data);
    }

    public function logout(){
        $this->User_m->logout();
        redirect('admin/User/login');
    }

    public function _unique_email($str)
    {
        //Do NOT validation if email already exists
        //UNLESS it`s the email for the current user
        $id = $this->uri->segment(4);

        $this->db->where('email',$this->input->post('email'));
        !$id||$this->db->where('id!=',$id);
        $user=$this->User_m->get();

        if (count($user)){
            $this->form_validation->set_message('__unique_email','%s should be unique');
            return FALSE;
        }
        return TRUE;
    }
}