<?php

class model_adminfaq extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getFaq(){

        $sql='SELECT * FROM tbl_faq WHERE archive=?';
        $res=$this->doSelect($sql,[0]);
        return $res;

    }

    function addFaq($data,$faqId){

        $title=$data['title'];
        $description=$data['description'];
        $colRight=$data['colRight'];
        if (isset($data['date'])){
            $date = $data['date'];
            $date = date('Y/m/d');
            $date_jalali = self::gregorianToJalali($date, '/');
        }
        date_default_timezone_set('Asia/Tehran');
        $time=date('H:i:s');

        if ($faqId==''){
            $sql='INSERT INTO tbl_faq (title,description,colRight,date,time) VALUES (?,?,?,?,?)';
            $params=[$title,$description,$colRight,$date_jalali,$time];
        }else{
            $sql='UPDATE tbl_faq SET title=?,description=?,colRight=? WHERE id=?';
            $params=[$title,$description,$colRight,$faqId];
        }

        $this->doQuery($sql,$params);

    }

    function faqInfo($id){

        $sql='SELECT * FROM tbl_faq WHERE id=?';
        $res=$this->doSelect($sql,[$id],1);
        return $res;

    }

    function archive($ids){

        $ids=join(',',$ids);
        $sql='UPDATE tbl_faq SET archive=? WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[1]);

    }

    function getArchive(){

        $sql='SELECT * FROM tbl_faq WHERE archive=?';
        $res=$this->doSelect($sql,[1]);
        return $res;

    }

    function recovery($ids){

        $ids=join(',',$ids);
        $sql='UPDATE tbl_faq SET archive=? WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[0]);

    }

    function delete($ids){

        $ids=join(',',$ids);
        $sql='DELETE FROM tbl_faq WHERE id IN ('.$ids.')';
        $this->doQuery($sql);

    }

}

?>