<?php

class Page extends Admin_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Page_m');
    }

    public function index()
    {
        //Fetch all pages
        $this->data['pages']=$this->Page_m->get_with_parent();


        //load view
        $this->data['subview'] ='admin/Page/index';
        $this->load->view('admin/_layout_main',$this->data);

    }

    public function order(){

        $this->data['sortable']=TRUE;
        //load view
        $this->data['subview'] ='admin/Page/order';
        $this->load->view('admin/_layout_main',$this->data);


    }

    public function order_ajax(){
        //Fetch all pages
        $this->data['pages']=$this->Page_m->get_nested();


        //load view

        $this->load->view('admin/Page/order_ajax',$this->data);

    }

    public function edit($id=NULL)
    {
        //fetch a page or set new one
       if($id){
            $this->data['page']=$this->Page_m->get($id);
                                        //$this->data['errors'][] he work it
            count($this->data['page'])||$this->data['errors'][]='Page could not be found';
       }
       else{
           $this->data['page']=$this->Page_m->get_new();
       }
       //pages for drop down
        $this->data['pages_no_parents']=$this->Page_m->get_no_parents();

       //Set up the form
        $rules=$this->Page_m->rules;
        $this->form_validation->set_rules($rules);

        //process the form
        if($this->form_validation->run() == TRUE){
            $data=$this->Page_m->array_from_post(array('title','slug','body','parent_id'));

            $this->Page_m->save( $data , $id);
            redirect('admin/Page');
        }

        //Load the view
        $this->data['subview'] ='admin/Page/edit';
        $this->load->view('admin/_layout_main',$this->data);

    }
    public function delete($id){

        $this->Page_m->delete($id);
        redirect('admin/Page');

    }

    public function _unique_slug($str)
    {
        //Do NOT validation if slug already exists
        //UNLESS it`s the slug for the current page

        $id = $this->uri->segment(4);
        $this->db->where('slug',$this->input->post('slug'));
        !$id||$this->db->where('id!=',$id);
        $page=$this->Page_m->get();

        if (count($page)){
            $this->form_validation->set_message('__unique_slug','%s should be unique');
            return FALSE;
        }
        return TRUE;
    }
}