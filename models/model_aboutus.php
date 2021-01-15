<?php

class model_aboutus extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getBg(){

        $sql='SELECT * FROM tbl_about_bg';
        $res=$this->doSelect($sql);
        return $res;

    }

    function getProcess(){

        $sql='SELECT * FROM tbl_about_process';
        $res=$this->doSelect($sql);
        return $res;

    }

    function getInfo(){

        $sql='SELECT * FROM tbl_about_info';
        $res=$this->doSelect($sql);
        return $res;

    }

    function getNumber(){

        $sql='SELECT * FROM tbl_about_number';
        $res=$this->doSelect($sql);
        return $res;

    }

    function getTeam(){

        $sql='SELECT * FROM tbl_team';
        $res=$this->doSelect($sql);
        return $res;

    }

    function getBrand(){

        $sql='SELECT * FROM tbl_brand';
        $res=$this->doSelect($sql);
        return $res;

    }

}

?>