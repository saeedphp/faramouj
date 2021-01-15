<?php

class model_adminbrand extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getBrand(){

        $sql='SELECT * FROM tbl_brand';
        $res=$this->doSelect($sql);
        return $res;

    }

    function addBrand($data,$file){

        $link=$data['link'];

        $fileName=$file['name'];
        $fileSize=$file['size'];
        $fileTmp=$file['tmp_name'];
        $fileType=$file['type'];
        $fileError=$file['error'];
        $uploadOk=1;
        $targetMain='assets/images/brand/';
        $newName='brand'.time();

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

            $sql='INSERT INTO tbl_brand (img,link) VALUES (?,?)';
            $params=[$target,$link];
            $this->doQuery($sql,$params);

        }

    }

}

?>