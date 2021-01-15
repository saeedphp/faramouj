<?php

class Admincategory extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index(){

        $this->view('admin/category/index',[],1,1);

    }

}

?>