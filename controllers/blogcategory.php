<?php

class blogcategory extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index($catId){

        $blogCat=$this->model->getBlogCat($catId);
        $cat=$this->model->catInfo($catId);

        $data=[
            'blogCat'=>$blogCat,
            'catInfo'=>$cat
        ];

        $this->view('blogcategory/index',$data);

    }

}

?>