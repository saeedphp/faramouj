<?php

class Adminservice extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index($serviceId=''){

        $service=$this->model->getService();
        $serviceInfo=$this->model->serviceInfo($serviceId);

        $data=[
            'service'=>$service,
            'serviceInfo'=>$serviceInfo
        ];

        $this->view('admin/service/index',$data,1,1);

    }

}

?>