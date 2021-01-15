<?php

class model_adminaboutus extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getBg(){

        $sql='SELECT * FROM tbl_about_bg';
        $res=$this->doSelect($sql);
        return $res;

    }

    function getBgInfo($id){

        $sql='SELECT * FROM tbl_about_bg WHERE id=?';
        $res=$this->doSelect($sql,[$id],1);
        return $res;

    }

    function addBg($data,$id,$files){

        $pretitle=$data['pretitle'];
        $title=$data['title'];
        $posttitle=$data['posttitle'];
        $description=$data['description'];
        $video=$data['video'];
        $link=$data['link'];
        if (isset($data['date'])){
            $date = $data['date'];
            $date = date('Y/m/d');
            $date_jalali = self::gregorianToJalali($date, '/');
        }
        date_default_timezone_set('Asia/Tehran');
        $time=date('H:i:s');

        $file=$files['image'];

        $fileName = $file['name'];
        $fileSize = $file['size'];
        $fileTmp = $file['tmp_name'];
        $fileType = $file['type'];
        $fileError = $file['error'];
        $uploadOk = 1;
        $targetMain = 'assets/images/';
        $newName = time();

        if ($fileType != 'image/jpg' AND $fileType != 'image/jpeg' AND $fileType != 'png') {
            $uploadOk = 0;
        }

        if ($fileSize > 5242880) {
            $uploadOk = 0;
        }

        if ($uploadOk == 1) {
            $ext = pathinfo($fileName, PATHINFO_EXTENSION);
            $target = $targetMain . $newName . '.' . $ext;
            move_uploaded_file($fileTmp, $target);
        }

        if ($id==''){

        }else{
            $sql='UPDATE tbl_about_bg SET pretitle=?,title=?,posttitle=?,description=?,img=?,video=?,link=?,time=?,date=? WHERE id=?';
            $params=[$pretitle,$title,$posttitle,$description,@$target,$video,$link,$date_jalali,$time,$id];
        }

        $this->doQuery($sql,$params);

    }

}

?>