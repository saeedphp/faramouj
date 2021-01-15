<?php

class Adminslider extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index(){

        if (isset($_FILES['image'])){
            $this->model->addSlider($_POST,$_FILES['image']);
        }

        $slider=$this->model->getSlider();

        $data=[
            'slider'=>$slider
        ];

        $this->view('admin/slider/index',$data,1,1);

    }

    function addslider(){

        if (isset($_POST['title']) && $_FILES['image']){
            $this->model->addSlider($_POST,$_FILES['image']);
        }

    }

    function editslider($sliderId){

        $sliderInfo=$this->model->sliderInfo($sliderId);
        echo json_encode($sliderInfo);

    }

    function delete(){

        if (isset($_POST['id'])){
            $ids=$_POST['id'];
            $this->model->delete($ids);
        }

    }



}

?>