<?php

class model_adminservice extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getService(){

        $sql='SELECT * FROM tbl_service WHERE hide=?';
        $res=$this->doSelect($sql,[0]);
        return $res;

    }

    function serviceInfo($id){

        $sql='SELECT * FROM tbl_service WHERE id=?';
        $res=$this->doSelect($sql,[$id],1);
        return $res;

    }

}

?>