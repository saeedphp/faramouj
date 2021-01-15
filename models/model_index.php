<?php

class model_index extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getSlider(){

        $sql='SELECT * FROM tbl_slider';
        $res=$this->doSelect($sql);
        return $res;

    }

    function getSocial(){

        $sql='SELECT * FROM tbl_social';
        $res=$this->doSelect($sql);
        return $res;

    }

    function getProcess(){

        $sql='SELECT * FROM tbl_process WHERE hide=?';
        $res=$this->doSelect($sql,[0]);
        return $res;

    }

    function getAbout(){

        $sql='SELECT * FROM tbl_about';
        $res=$this->doSelect($sql);
        return $res;

    }

    function getBrand(){

        $sql='SELECT * FROM tbl_brand';
        $res=$this->doSelect($sql);
        return $res;

    }

    function getService(){

        $sql='SELECT * FROM tbl_service WHERE hide=?';
        $res=$this->doSelect($sql,[0]);
        return $res;

    }

    function getBenefit(){

        $sql='SELECT * FROM tbl_benefit';
        $res=$this->doSelect($sql);
        return $res;

    }

    function getSkill(){

        $sql='SELECT * FROM tbl_skill';
        $res=$this->doSelect($sql);
        return $res;

    }

}

?>