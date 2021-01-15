<?php

class Adminskill extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index(){

        $skill=$this->model->getSkill();

        $data=[
            'skill'=>$skill
        ];

        $this->view('admin/skill/index',$data,1,1);

    }

}

?>