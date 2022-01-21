<?php

class Dashboard extends Admin_Controller{

    public function index(){
        $this->data['subview']='admin/Dashboard/index';
        $this->load->view('admin/_layout_main',$this->data);
    }

    public function modal(){
        $this->load->view('admin/_layout_modal',$this->data);
    }

}