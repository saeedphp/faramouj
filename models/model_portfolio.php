<?php

class model_portfolio extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getPortfolio(){

        $sql='SELECT tbl_portfolio.*,tbl_portfolio_cat.link,tbl_portfolio_cat.title AS catTitle,tbl_portfolio_cat.id AS catId
              FROM tbl_portfolio
              LEFT JOIN tbl_portfolio_cat
              ON tbl_portfolio.cat=tbl_portfolio_cat.id
              WHERE tbl_portfolio.archive=?';
        $res=$this->doSelect($sql,[0]);
        return $res;

    }

    function getPortfolioCat(){

        $sql='SELECT * FROM tbl_portfolio_cat';
        $res=$this->doSelect($sql);
        return $res;

    }

    function catInfo($id){

        $sql='SELECT * FROM tbl_portfolio_cat WHERE id=?';
        $res=$this->doSelect($sql,[$id],1);
        return $res;

    }

    function getPortfolioInfo($id){

        $sql='SELECT tbl_portfolio.*,tbl_portfolio_cat.title AS catTitle,tbl_portfolio_cat.link
              FROM tbl_portfolio
              LEFT JOIN tbl_portfolio_cat
              ON tbl_portfolio.cat=tbl_portfolio_cat.id
              WHERE tbl_portfolio.id=?';
        $res=$this->doSelect($sql,[$id],1);
        return $res;

    }

}

?>