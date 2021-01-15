<?php

class Adminaboutus extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index(){

        $this->view('admin/aboutus/index',[],1,1);

    }

    function bg($id=''){

        $bg=$this->model->getBg();
        $bgInfo=$this->model->getBgInfo($id);

        $data=[
            'bg'=>$bg,
            'bgInfo'=>$bgInfo
        ];

        $this->view('admin/aboutus/bg',$data,1,1);

    }


    function addbg($id=''){

        if (isset($_POST['pretitle'])){
            $this->model->addBg($_POST,$id,$_FILES);
        }

        $bgInfo=$this->model->getBgInfo($id);

        $data=[
            'bgInfo'=>$bgInfo
        ];

        $this->view('admin/aboutus/addbg',$data,1,1);

    }

}

?>