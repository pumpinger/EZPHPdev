<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/29
 * Time: 上午12:30
 */


class appController extends baseController {





    public function indexAction(){



        $res=moduleModel::intance()->getOne(2);


//        var_dump(postModel::intance()->getSql());


        $this->render($res);
//        $this::cc();



//        include_once 'e.php';
//        throw new e(1000);
    }



}