<?php
use EZPHP\core\controller;
use EZPHP\Exception\myException;

/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/29
 * Time: 上午12:30
 */


class indexController extends baseController  {


    public function onStart()
    {
        parent::onStart();
    }

    public function onRender()
    {
        parent::onRender();
        $this->setTitle('首页');
    }


    public  function onEnd()
    {

    }


    public function welcomeAction()
    {


        $this->render(
            array(
                'ver'=>C('EZPHP_ver'),
            )
        );
        
    }
    

    public function indexAction(){


        $nav=classModel::intance()->getAll(array('id','name','price'));
        $pic=moduleModel::intance()->getAll(array('id','pic'));


//        var_dump(postModel::intance()->getSql());b


        $this->render(array(
            'nav'=>$nav,
            'pic'=>$pic,
        ));
//        $this::cc();
        
        

//        include_once 'e.php';
//        throw new e(1000);
    }





    public function index2Action(){
        $this->json(array(
            'aa'=>123,
            'bb'=>array(
                'cc'=>11
            )
        ));
    }



    public static function cc()
    {
        echo 123123123;
    }
}