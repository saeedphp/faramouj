<?php

class Adminbrand extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index(){

        $brand=$this->model->getBrand();

        $data=[
            'brand'=>$brand
        ];

        $this->view('admin/brand/index',$data,1,1);

    }

    function addbrand(){

        $this->model->addBrand($_POST,$_FILES['image']);

    }

}

?>