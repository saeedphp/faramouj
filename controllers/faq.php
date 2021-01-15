<?php

class Faq extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index(){

        $faq=$this->model->getFaq();

        $data=[
            'faq'=>$faq,
        ];

        $this->view('faq/index',$data);

    }

}

?>