<?php

class Service extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index(){

        $seo=$this->model->getSeo();
        $seoBox=$this->model->getSeoBox();
        $content=$this->model->getContent();
        $counter=$this->model->getCount();
        $realNum=$this->model->getRealNumber();
        $circle=$this->model->getCircle();

        $data=[
            'seo'=>$seo,
            'seoBox'=>$seoBox,
            'content'=>$content,
            'counter'=>$counter,
            'realNum'=>$realNum,
            'circle'=>$circle,
        ];

        $this->view('service/index',$data);

    }

}

?>