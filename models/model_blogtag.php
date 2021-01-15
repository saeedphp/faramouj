<?php

class model_blogtag extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getBlog($tagId){



    }

    function tagInfo($id){

        $sql='SELECT * FROM tbl_blog_tag WHERE id=?';
        $res=$this->doSelect($sql,[$id],1);
        return $res;

    }

}

?>