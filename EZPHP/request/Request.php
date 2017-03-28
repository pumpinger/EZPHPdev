<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/24
 * Time: 14:48
 */


namespace EZPHP\request;

use EZPHP\base;
use EZPHP\core\controller;

class Request extends base {

    public $mController;

    public function __construct(controller $controller)
    {
        $this->mController=$controller;
    }

    public function get(){

    }

    public function set(){

    }

    public function getAll()
    {

    }

    public function checkParam()
    {
        return $this->mController->check();
    }


}