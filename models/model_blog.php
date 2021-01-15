<?php

class model_blog extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getBlog(){

        $sql='SELECT tbl_blog.*,tbl_blog_cat.title AS catTitle,tbl_blog_cat.id AS blogId
              FROM tbl_blog
              LEFT JOIN tbl_blog_cat
              ON tbl_blog.cat=tbl_blog_cat.id';
        $res=$this->doSelect($sql);

        return $res;

    }

    function blogInfo($blogId){

        $sql='SELECT tbl_blog.*,tbl_blog_cat.title AS catTitle,tbl_blog_tag.title AS tagTitle
              FROM tbl_blog
              LEFT JOIN tbl_blog_cat
              ON tbl_blog.cat=tbl_blog_cat.id
              LEFT JOIN tbl_blog_tag
              ON tbl_blog.tag=tbl_blog_tag.id
              WHERE tbl_blog.id=?';
        $res=$this->doSelect($sql,[$blogId],1);

        $tags=$res['tag'];
        $tags=explode(',',$tags);
        $tags=array_filter($tags);
        $all_tags=[];
        foreach ($tags as $tag){
            $tags_info=$this->tagInfo($tag);
            array_push($all_tags,$tags_info);
        }

        $res['all_tag']=$all_tags;

        return $res;

    }

    function tagInfo($id){

        $sql='SELECT * FROM tbl_blog_tag WHERE id=?';
        $res=$this->doSelect($sql,[$id],1);
        return $res;

    }

}

?>