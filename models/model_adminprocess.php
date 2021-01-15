<?php

class model_adminprocess extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getProcess(){

        $sql='SELECT * FROM tbl_process WHERE hide=?';
        $res=$this->doSelect($sql,[0]);
        return $res;

    }

    function processInfo($id){

        $sql='SELECT * FROM tbl_process WHERE id=?';
        $res=$this->doSelect($sql,[$id],1);
        return $res;


    }

    function addProcess($data,$id){

        $number=$data['number'];
        $icon=$data['icon'];
        $title=$data['title'];
        $description=$data['description'];
        $link=$data['link'];
        if (isset($data['date'])){
            $date = $data['date'];
            $date = date('Y/m/d');
            $date_jalali = self::gregorianToJalali($date, '/');
        }
        date_default_timezone_set('Asia/Tehran');
        $time=date('H:i:s');

        if ($id==''){
            $sql='INSERT INTO tbl_process (number,icon,title,description,link,date,time) VALUES (?,?,?,?,?,?,?)';
            $params=[$number,$icon,$title,$description,$link,$date_jalali,$time];
        }else{
            $sql='UPDATE tbl_process SET number=?,icon=?,title=?,description=?,link=? WHERE id=?';
            $params=[$number,$icon,$title,$description,$link,$id];
        }

        $this->doQuery($sql,$params);

    }

    function archive($ids){

        $ids=join(',',$ids);
        $sql='UPDATE tbl_process SET hide=? WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[1]);

    }

    function getArchive(){

        $sql='SELECT * FROM tbl_process WHERE hide=?';
        $res=$this->doSelect($sql,[1]);
        return $res;

    }

    function recovery($ids){

        $ids=join(',',$ids);
        $sql='UPDATE tbl_process SET hide=? WHERE id IN ('.$ids.')';
        $this->doQuery($sql,[0]);

    }

    function delete($ids){

        $ids=join(',',$ids);
        $sql='DELETE FROM tbl_process WHERE id IN ('.$ids.')';
        $this->doQuery($sql);

    }

}

?>