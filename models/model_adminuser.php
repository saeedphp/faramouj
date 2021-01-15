<?php

class model_adminuser extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getUser(){

        $sql='SELECT tbl_user.*,tbl_user_level.title
              FROM tbl_user
              LEFT JOIN tbl_user_level
              ON tbl_user.level=tbl_user_level.id';
        $res=$this->doSelect($sql);
        return $res;

    }

}

?>