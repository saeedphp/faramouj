<?php

class model_portfoliocategory extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getPortfolioCat($catId){

        $sql='SELECT tbl_portfolio.*,tbl_portfolio_cat.title AS catTitle,tbl_portfolio_cat.link
              FROM tbl_portfolio
              LEFT JOIN tbl_portfolio_cat
              ON tbl_portfolio.cat=tbl_portfolio_cat.id
              WHERE tbl_portfolio.cat=?';
        $res=$this->doSelect($sql,[$catId]);
        return $res;

    }

    function catInfo($id){

        $sql='SELECT * FROM tbl_portfolio_cat WHERE id=?';
        $res=$this->doSelect($sql,[$id],1);
        return $res;

    }

}

?>