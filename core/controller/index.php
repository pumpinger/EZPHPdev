<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/29
 * Time: 上午12:30
 */


class indexController extends \EZPHP\core\controller{

    public function indexAcion(){


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
        p('123');
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