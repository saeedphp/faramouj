<?php

class Aboutus extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index(){

        $bg=$this->model->getBg();
        $process=$this->model->getProcess();
        $info=$this->model->getInfo();
        $number=$this->model->getNumber();
        $team=$this->model->getTeam();
        $brand=$this->model->getBrand();

        $data=[
            'bg'=>$bg,
            'process'=>$process,
            'info'=>$info,
            'number'=>$number,
            'team'=>$team,
            'brand'=>$brand
        ];

        $this->view('aboutus/index',$data);

    }

}

?>