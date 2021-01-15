<?php

class model_faq extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getFaq(){

        $sql='SELECT * FROM tbl_faq WHERE archive=?';
        $res=$this->doSelect($sql,[0]);
        return $res;

    }

}

?>