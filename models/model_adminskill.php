<?php

class model_adminskill extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getSkill(){

        $sql='SELECT * FROM tbl_skill WHERE hide=?';
        $res=$this->doSelect($sql,[0]);
        return $res;

    }

}

?>