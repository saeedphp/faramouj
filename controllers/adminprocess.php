<?php

class adminprocess extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index($processId=0){

        $process=$this->model->getProcess();
        $processInfo=$this->model->processInfo($processId);

        $data=[
            'process'=>$process,
            'processInfo'=>$processInfo
        ];

        $this->view('admin/process/index',$data,1,1);

    }

    function addprocess($processId=''){

        $this->model->addProcess($_POST,$processId);

    }

    function editprocess($processId){

        $processInfo=$this->model->processInfo($processId);
        echo json_encode($processInfo);

    }

    function archive(){

        if (isset($_POST['id'])){
            $ids=$_POST['id'];
            $this->model->archive($ids);
        }

    }

    function archiveprocess(){

        $archive=$this->model->getArchive();

        $data=[
            'archive'=>$archive
        ];

        $this->view('admin/process/archive',$data,1,1);

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