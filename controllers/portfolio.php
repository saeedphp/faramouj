<?php

class Portfolio extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index($portfolioId=''){

        $portfolio=$this->model->getPortfolio();
        $portfolioCat=$this->model->getPortfolioCat();
        $portfolioInfo=$this->model->getPortfolioInfo($portfolioId);

        $data=[
            'portfolio'=>$portfolio,
            'portfolioCat'=>$portfolioCat,
            'portfolioInfo'=>$portfolioInfo
        ];

        if ($portfolioId==''){
            $this->view('portfolio/index',$data);
        }else{
            $this->view('portfolio/detail',$data);
        }


    }

}

?>