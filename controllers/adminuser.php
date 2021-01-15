<?php

class Adminuser extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index(){

        $user=$this->model->getUser();

        $data=[
            'user'=>$user
        ];

        $this->view('admin/user/index',$data,1,1);

    }

    function adduser(){

        $this->view('admin/user/adduser',[],1,1);

    }

}

?>