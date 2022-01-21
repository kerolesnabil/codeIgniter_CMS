<?php

include_once (APPPATH."core/MY_Model.php");

class Article_m extends MY_Model {

    protected $_table_name='articles';
    protected $_order_by='pudate desc , id desc';
    protected $_timestamp=TRUE;
    public $rules=array(
        'pudate'=>array(
            'field'=>'pudate',
            'label'=>'Publication date',
            'rules'=>'trim|required|exact_length[10]|xss_clean'
        ),
        'title'=>array(
            'field'=>'title',
            'label'=>'Title',
            'rules'=>'trim|required|max_length[100]|xss_clean'
        ),
        'slug'=>array(
            'field'=>'slug',
            'label'=>'Slug',
            'rules'=>'trim|required|max_length[100]|url_title|xss_clean'
        ),
        'body'=>array(
            'field'=>'body',
            'label'=>'Body',
            'rules'=>'trim|required'
        ),
    );

    public function get_new(){

        $article =new stdClass();
        $article->title='';
        $article->slug='';
        $article->body='';
        $article->pudate=date('Y-m-d');
        return $article;
    }



}