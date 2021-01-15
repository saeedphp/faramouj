<?php

class model_blogcategory extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getBlogCat($catId){

        $sql='SELECT tbl_blog.*,tbl_blog_cat.title AS blogTitle
              FROM tbl_blog
              LEFT JOIN tbl_blog_cat
              ON tbl_blog.cat=tbl_blog_cat.id
              WHERE tbl_blog.cat=?';
        $res=$this->doSelect($sql,[$catId]);
        return $res;

    }

    function catInfo($id){

        $sql='SELECT * FROM tbl_blog_cat WHERE id=?';
        $res=$this->doSelect($sql,[$id],1);
        return $res;

    }

}

?>