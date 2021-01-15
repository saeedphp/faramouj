<?php

class Adminfaq extends Controller{

    public function __construct()
    {
        parent::__construct();
        Model::sessionInit();;
        $check=Model::sessionGet('userId');
        if ($check==false){
            header('location:'.URL.'adminlogin');
        }
    }

    function index($id=''){

        $faq=$this->model->getFaq();
        $faqInfo=$this->model->faqInfo($id);

        $data=[
            'faq'=>$faq,
            'faqInfo'=>$faqInfo
        ];

        $this->view('admin/faq/index',$data,1,1);

    }

    function addfaq($faqId=''){

        $this->model->addFaq($_POST,$faqId);

    }

    function editfaq($faqId){

        $faqInfo=$this->model->faqInfo($faqId);
        echo json_encode($faqInfo);

    }

    function archive(){

        if (isset($_POST['id'])){
            $ids=$_POST['id'];
            $this->model->archive($ids);
        }

    }

    function faqarchive(){

        $archive=$this->model->getArchive();

        $data=[
            'archive'=>$archive
        ];

        $this->view('admin/faq/archive',$data,1,1);

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