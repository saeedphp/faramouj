<?php

class portfoliocategory extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index($catId){

        $portfolioCat=$this->model->getPortfolioCat($catId);
        $cat=$this->model->catInfo($catId);

        $data=[
            'portfolioCat'=>$portfolioCat,
            'catInfo'=>$cat
        ];

        $this->view('portfoliocategory/index',$data);

    }

}

?>