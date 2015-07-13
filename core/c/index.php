<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/29
 * Time: 上午12:30
 */


class index extends \EZPHP\core\controller{
    public function index1(){

        $this->start();
        dump('进入控制器');
        indexModel::index();

        $this->render();

//        include_once 'e.php';
//        throw new e(1000);
//        self::cdd();
    }


    public function index2(){
        dump('123');
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