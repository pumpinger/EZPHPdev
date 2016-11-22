<?php
use EZPHP\core\controller;

/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/29
 * Time: 上午12:30
 */


class indexController extends controller{


    public function onStart()
    {

        var_dump('start');
    }



    public function indexAction(){


//        indexModel::index();
//        \EZPHP\core\controller::end();
//        $this->assign(array(12,3,2));
        userModel::index();
        $this->render(array(12,3,2));

//
//        include_once 'e.php';
//        throw new e(1000);
//        self::cdd();
    }



    public function index2Action(){
        $this->json(array(
            'aa'=>123,
            'bb'=>array(
                'cc'=>11
            )
        ));
    }

    public static function end()
    {
        echo 'welcome core class3';
    }


    public static function cc()
    {
        echo 123123123;
    }
}