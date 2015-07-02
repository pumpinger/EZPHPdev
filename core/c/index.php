<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/29
 * Time: 上午12:30
 */


class index extends \EZPHP\core\controller{
    public function index1(){
        var_dump(__NAMESPACE__);

        self::start();
        dump('进入控制器');
        indexModel::index();
    }


    public function index2(){
        dump('123');
    }
}