<?php

class Contactus extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index(){

        $this->view('contactus/index');

    }

}

?>