<?php

class model_adminmenu extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getMenuLink(){

        $sql='SELECT * FROM tbl_menu';
        $res=$this->doSelect($sql);
        return $res;

    }

    function getChildren($idmenu){

        $sql='SELECT * FROM tbl_menu WHERE parent=?';
        $res=$this->doSelect($sql,[$idmenu]);
        return $res;

    }

    function getParents($idmenu){

        $menuInfo=$this->menuInfo($idmenu);
        $parent=$menuInfo['parent'];
        $all_parents=[];
        while ($parent!=0){
            $sql='SELECT * FROM tbl_menu WHERE id=?';
            $parentMenu=$this->doSelect($sql,[$parent],1);
            array_push($all_parents,$parentMenu);
            $parent=$parentMenu['parent'];
        }

        return $all_parents;

    }

    function menuInfo($idmenu){

        $sql='SELECT * FROM tbl_menu WHERE id=?';
        $res=$this->doSelect($sql,[$idmenu],1);
        return $res;

    }

    function addMenu($data,$menuId){

        $title=$data['title'];
        $link=$data['link'];
        $order=$data['menuOrder'];
        $parent=$data['parent'];
        if (isset($data['date'])){
            $date = $data['date'];
            $date = date('Y/m/d');
            $date_jalali = self::gregorianToJalali($date, '/');
        }
        date_default_timezone_set('Asia/Tehran');
        $time=date('H:i:s');

        if ($menuId==''){
            $sql='INSERT INTO tbl_menu (title,link,menuOrder,parent,date,time) VALUES (?,?,?,?,?,?)';
            $params=[$title,$link,$order,$parent,$date_jalali,$time];
        }else{
            $sql='UPDATE tbl_menu SET title=?,link=?,menuOrder=?,parent=? WHERE id=?';
            $params=[$title,$link,$order,$parent,$menuId];
        }

        $this->doQuery($sql,$params);

    }

    function editMenu($menuId){



    }

    function delete($ids){

        $ids=join(',',$ids);
        $sql='DELETE FROM tbl_menu WHERE id IN ('.$ids.')';
        $this->doQuery($sql);

    }

}

?>