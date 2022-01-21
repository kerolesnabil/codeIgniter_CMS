<?php

class Article extends Admin_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Article_m');
    }

    public function index()
    {
        //Fetch all pages
        $this->data['articles']=$this->Article_m->get();


        //load view
        $this->data['subview'] ='admin/article/index';
        $this->load->view('admin/_layout_main',$this->data);

    }

    public function edit($id=NULL)
    {
        //fetch a page or set new one
       if($id){
            $this->data['article']=$this->Article_m->get($id);
                                        //$this->data['errors'][] he work it
           count($this->data['article'])||$this->data['errors'][]='article could not be found';
       }else{
           $this->data['article']=$this->Article_m->get_new();
       }

       //Set up the form
        $rules=$this->Article_m->rules;
        $this->form_validation->set_rules($rules);

        //process the form
        if($this->form_validation->run() == TRUE){
            $data=$this->Article_m->array_from_post(
                array(
                    'title',
                    'slug',
                    'body',
                    'pudate'
                ));
            $this->Article_m->save( $data , $id);
            redirect('admin/article');
        }

        //Load the view
        $this->data['subview'] ='admin/article/edit';
        $this->load->view('admin/_layout_main',$this->data);

    }
    public function delete($id){

        $this->Article_m->delete($id);
        redirect('admin/article');

    }

}