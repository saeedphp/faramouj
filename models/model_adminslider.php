<?php

class model_adminslider extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getSlider(){

        $sql='SELECT * FROM tbl_slider';
        $res=$this->doSelect($sql);
        return $res;

    }

    function sliderInfo($sliderId){

        $sql='SELECT * FROM tbl_slider WHERE id=?';
        $res=$this->doSelect($sql,[$sliderId],1);
        return $res;

    }

    function addSlider($data,$file){

        $subtitle=$data['subtitle'];
        $title=$data['title'];
        $description=$data['description'];
        $button=$data['button'];
        $link=$data['link'];
        if (isset($data['date'])){
            $date = $data['date'];
            $date = date('Y/m/d');
            $date_jalali = self::gregorianToJalali($date, '/');
        }
        date_default_timezone_set('Asia/Tehran');
        $time=date('H:i:s');

        $fileName=$file['name'];
        $fileSize=$file['size'];
        $fileTmp=$file['tmp_name'];
        $fileType=$file['type'];
        $fileError=$file['error'];
        $uploadOk=1;
        $targetMain='assets/images/slider/';
        $newName='slider';

        if ($fileType!='image/jpg' AND $fileType!='image/jpeg' AND $fileType!='png'){
            $uploadOk=0;
        }

        if ($fileSize > 5242880){
            $uploadOk=0;
        }

        if ($uploadOk == 1) {

            $ext = pathinfo($fileName, PATHINFO_EXTENSION);
            $target = $targetMain . $newName . '.' . $ext;
            move_uploaded_file($fileTmp, $target);

            $sql='INSERT INTO tbl_slider (subtitle,title,description,img,button,link,date,time) VALUES (?,?,?,?,?,?,?,?)';
            $params=[$subtitle,$title,$description,$target,$button,$link,$date_jalali,$time];
            $this->doQuery($sql,$params);

        }


    }

    function delete($ids){

        $ids=join(',',$ids);
        $sql='DELETE FROM tbl_slider WHERE id IN ('.$ids.')';
        $this->doQuery($sql);

    }

}

?>