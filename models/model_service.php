<?php

class model_service extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getSeo(){

        $sql='SELECT * FROM tbl_seo';
        $res=$this->doSelect($sql);
        return $res;

    }

    function getSeoBox(){

        $sql='SELECT * FROM tbl_seobox';
        $res=$this->doSelect($sql);
        return $res;

    }

    function getContent(){

        $sql='SELECT * FROM tbl_contentservice';
        $res=$this->doSelect($sql);
        return $res;

    }

    function getCount(){

        $sql='SELECT * FROM tbl_counter';
        $res=$this->doSelect($sql);
        return $res;

    }

    function getRealNumber(){

        $sql='SELECT * FROM tbl_real_number';
        $res=$this->doSelect($sql);
        return $res;

    }

    function getCircle(){

        $sql='SELECT * FROM tbl_circle';
        $res=$this->doSelect($sql);
        return $res;

    }

}

?>