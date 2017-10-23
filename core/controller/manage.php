<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/29
 * Time: 上午12:30
 */


class manageController extends adminController  {





    public function indexAction(){



        $res=classModel::intance()->getAll();


//        var_dump(postModel::intance()->getSql());



        $this->render($res);
//        $this::cc();



//        include_once 'e.php';
//        throw new e(1000);
    }

    public function classSaveAction()
    {


        $res1=classModel::intance()->chgOne(
            array('content'=>$_REQUEST['content_1']),1
        );

        $res2=classModel::intance()->chgOne(
            array('content'=>$_REQUEST['content_2']),2
        );


        $res3=classModel::intance()->chgOne(
            array('content'=>$_REQUEST['content_3']),3
        );


        $res4=classModel::intance()->chgOne(
            array('content'=>$_REQUEST['content_4']),4
        );


        $res5=classModel::intance()->chgOne(
            array('content'=>$_REQUEST['content_5']),5
        );



        if( $res1  &&  $res2  && $res3  &&  $res4  &&  $res5){
            $this->json();
        }else{
            //这里 这么做 json  的 exception
            throw new \EZPHP\Exception\myException('保存失败');

        }



    }



}