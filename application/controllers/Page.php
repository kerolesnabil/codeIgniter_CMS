<?php
class Page extends Fronted_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Page_m');
    }

    public function index()
    {
        $this->load->view('_main_layout');
    }

}