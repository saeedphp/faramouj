<?php

class Adminmenu extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    function index($menuId=0){

        $menu=$this->model->getChildren(0);
        $menuInfo=$this->model->menuInfo($menuId);

        $data=[
            'menu'=>$menu,
            'menuInfo'=>$menuInfo
        ];

        $this->view('admin/menu/index',$data,1,1);

    }

    function showchildren($idmenu=0){

        $children=$this->model->getChildren($idmenu);
        $parent=$this->model->getParents($idmenu);
        $menuInfo=$this->model->menuInfo($idmenu);

        $data=[
            'menu'=>$children,
            'parents'=>$parent,
            'menuInfo'=>$menuInfo
        ];

        $this->view('admin/menu/index',$data,1,1);

    }

    function addmenu($menuId=''){

        if (isset($_POST['title'])){
            $this->model->addMenu($_POST,$menuId);
        }

    }

    function editmenu($menuId){

        $menuInfo=$this->model->menuInfo($menuId);
        echo json_encode($menuInfo);

    }

    function delete(){

        if (isset($_POST['id'])){
            $ids=$_POST['id'];
            $this->model->delete($ids);
        }

    }

}

?>