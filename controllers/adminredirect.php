<?php

class Adminredirect extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index($id=''){

        $redirect=$this->model->getRedirect();
        $redirectInfo=$this->model->redirectInfo($id);

        $data=[
            'redirect'=>$redirect,
            'redirectInfo'=>$redirectInfo
        ];

        $this->view('admin/redirect/index',$data,1,1);

    }

    function addredirect($id=''){

        $this->model->addRedirect($_POST,$id);

    }

    function editredirect($id){

        $redirectInfo=$this->model->redirectInfo($id);
        echo json_encode($redirectInfo);

    }

    function archive(){

        if (isset($_POST['id'])){
            $ids=$_POST['id'];
            $this->model->archive($ids);
        }

    }

    function redirectarchive(){

        $archive=$this->model->getArchive();

        $data=[
            'archive'=>$archive
        ];

        $this->view('admin/redirect/archive',$data,1,1);

    }

    function recovery(){

        if (isset($_POST['id'])){
            $ids=$_POST['id'];
            $this->model->recovery($ids);
        }

    }

    function delete(){

        if (isset($_POST['id'])){
            $ids=$_POST['id'];
            $this->model->delete($ids);
        }

    }

}

?>