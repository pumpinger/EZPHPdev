<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/29
 * Time: 上午12:30
 */


class classController extends baseController {





    public function indexAction(){

        $active = $_GET['active']?:1;


        $res=classModel::intance()->getOne($active);


        $nav=classModel::intance()->getAll(array('id','name'));

//        var_dump(postModel::intance()->getSql());



        $this->render(array(
            'active'=>$active,
            'data'=>$res,
            'nav'=>$nav
        ));
//        $this::cc();



//        include_once 'e.php';
//        throw new e(1000);
    }



}