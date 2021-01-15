<?php
$active='purpose';
class Purpose extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index(){

        $process=$this->model->getProcess();
        $tab=$this->model->getTab();

        $data=[
            'process'=>$process,
            'tab'=>$tab
        ];

        $this->view('purpose/index',$data);

    }

}

?>