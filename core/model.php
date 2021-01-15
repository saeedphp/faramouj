<?php

class Model{

    public static $conn='';


    public function __construct()
    {
        $servername='localhost';
        $username='root';
        $password='';
        $dbname='digital';
        $attr=array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8');
        self::$conn=new PDO('mysql:host='.$servername.';dbname='.$dbname,$username,$password,$attr);
        self::$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        if (function_exists('jdate')==false){
            require ('assets/jdf/jdf.php');
        }

    }

    function doSelect($sql,$values=[],$fetch='',$fetchStyle=PDO::FETCH_ASSOC){

        $stmt=self::$conn->prepare($sql);

        foreach ($values as $key=>$value){
            $stmt->bindValue($key+1,$value);
        }
        $stmt->execute();
        if ($fetch==''){
            $res=$stmt->fetchAll($fetchStyle);
        }else{
            $res=$stmt->fetch($fetchStyle);
        }

        return $res;

    }

    function doQuery($sql,$values=[]){

        $stmt=self::$conn->prepare($sql);

        foreach ($values as $key=>$value){
            $stmt->bindValue($key+1,$value);
        }
        $stmt->execute();

    }

    public static function jalaliDate($format='Y/n/j'){

        $date=jdate($format);
        return $date;

    }

    public static function jalaliToGregorian($jalali,$format='/'){

        $jalali=explode('/',$jalali);
        $year=$jalali[0];
        $month=$jalali[1];
        $day=$jalali[2];
        $date=jalali_to_gregorian($year,$month,$day);
        $date=implode($format,$date);
        $date=new DateTime($date);
        $date=$date->format('Y/m/d');

        return $date;

    }

    public static function gregorianToJalali($gregorian,$format='/'){

        $gregorian=explode('/',$gregorian);
        $year=$gregorian[0];
        $month=$gregorian[1];
        $day=$gregorian[2];
        $date=gregorian_to_jalali($year,$month,$day);
        $date=implode($format,$date);
        $date=new DateTime($date);
        $date=$date->format('Y/m/d');

        return $date;

    }

    function getMenu($parentId=0){

        $sql='SELECT * FROM tbl_menu WHERE parent=?';
        $res=$this->doSelect($sql,[$parentId]);

        foreach ($res as $row){
            $children=$this->getMenu($row['id']);
            if (sizeof([$children])>0){
                $row['children']=$children;
            }
            @$data[]=$row;
        }

        return @$data;

    }

    public static function getMetaTga(){

        $url=basename($_SERVER['REQUEST_URI']);
        $sql='SELECT * FROM tbl_metatag WHERE url=?';
        $res=self::doSelect($sql,[$url],1);
        return $res;

    }

    public static function getRedirect(){

        $sql='SELECT * FROM tbl_redirect WHERE archive=?';
        $res=self::doSelect($sql,[0]);
        return $res;

    }

    public static function sessionInit(){

        @session_start();

    }

    public static function sessionSet($name,$vale){

        $_SESSION[$name]=$vale;

    }

    public static function sessionGet($name){

        if (isset($_SESSION[$name])){
            return $_SESSION[$name];
        }else{
            return false;
        }

    }

}