<?php

class model_purpose extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getProcess(){

        $sql='SELECT * FROM tbl_purpose_process';
        $res=$this->doSelect($sql);
        return $res;

    }

    function getTab(){

        $sql='SELECT * FROM tbl_process_tab';
        $res=$this->doSelect($sql);
        return $res;

    }

}

?>