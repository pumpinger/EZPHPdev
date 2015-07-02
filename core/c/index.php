<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/29
 * Time: 上午12:30
 */


class index {
    public function index1(){
        dump('进入控制器');
        indexM::index();
    }


    public function index2(){
        dump('123');
    }
}