<?php

class Index extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index(){

        $slider=$this->model->getSlider();
        $social=$this->model->getSocial();
        $process=$this->model->getProcess();
        $about=$this->model->getAbout();
        $brand=$this->model->getBrand();
        $service=$this->model->getService();
        $benefit=$this->model->getBenefit();
        $skill=$this->model->getSkill();

        $data=[
            'slider'=>$slider,
            'social'=>$social,
            'process'=>$process,
            'about'=>$about,
            'brand'=>$brand,
            'service'=>$service,
            'benefit'=>$benefit,
            'skill'=>$skill
        ];

        $this->view('index/index',$data);

    }

}

?>