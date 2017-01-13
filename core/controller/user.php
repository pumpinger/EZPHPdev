<?php
use EZPHP\core\controller;

/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/29
 * Time: 上午12:30
 */



class userController extends baseController{

    public function indexAction(){


//        $a=1/0;
//        throw new Exception('123');

        $this->render(array(123,234,1232));
    }


}

