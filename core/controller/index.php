<?php
use EZPHP\core\controller;

/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/29
 * Time: 上午12:30
 */


class indexController extends controller  {


    public function onStart()
    {

        



    }


    public  function onEnd()
    {
        echo 'welcome core class3';
    }
    

    public function indexAction(){


//        indexModel::index();
//        \EZPHP\core\controller::end();
//        $this->assign(array(12,3,2));

        
        $this->render(
            array(
                'ver'=>C('EZPHP_ver'),
            )
        );

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



    public static function cc()
    {
        echo 123123123;
    }
}