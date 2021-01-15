<?php

class Blog extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index($blogId=''){

        $blog=$this->model->getBlog();
        $blogInfo=$this->model->blogInfo($blogId);

        $data=[
            'blog'=>$blog,
            'blogInfo'=>$blogInfo
        ];

        if ($blogId==''){
            $this->view('blog/index',$data);
        }else{
            $this->view('blog/detail',$data);
        }

    }

}

?>