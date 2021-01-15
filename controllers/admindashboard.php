<?php

class Admindashboard extends Controller{


    public function __construct()
    {
        parent::__construct();
        Model::sessionInit();;
        $check=Model::sessionGet('userId');
        if ($check==false){
            header('location:'.URL.'adminlogin');
        }
    }

    function index(){

        $this->view('admin/dashboard/index',[],1,1);

    }

}

?>