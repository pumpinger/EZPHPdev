<?php
use EZPHP\core\controller;

/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/29
 * Time: 上午12:30
 */



//todo  require  为什么 会有两次   可能是多次报错

class userController extends baseController{

    public function indexAction(){

//            throw new Exception('123');
        $this->render(array(123,234,1232));
    }


}

