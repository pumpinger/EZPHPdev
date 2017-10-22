<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/29
 * Time: 上午12:30
 */


class manageController extends adminController  {





    public function indexAction(){



//        $res=postModel::intance()->getAll();


//        var_dump(postModel::intance()->getSql());

        $active = $_GET['active']?:1;


        $this->render($active);
//        $this::cc();



//        include_once 'e.php';
//        throw new e(1000);
    }



}