<?php

class blogtag extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index($tagId){

        $blog=$this->model->getBlog($tagId);

        $data=[
            'blog'=>$blog
        ];

        $this->view('blogtag/index',$data);

    }

}

?>