<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/28
 * Time: 下午1:23
 */

namespace EZPHP;


class base {
    
    
    
    function __set($property_name, $value)
    {
        $this->$property_name=$value;
    }

    function __get($property_name)
    {
        return isset($this->$property_name) ? $this->$property_name : null;
    }


    //为什么这里的call 没有被调用
    public function __call($name,$arguments) {
            echo 'not exists method:';
            echo 'the name is :';
            var_dump($name);
            echo 'the arguments is :';
            var_dump($arguments);
//        throw new Exception('not exists method');
    }

    public function ___callStatic($name,$arguments) {
        echo 'not exists method:';
        echo 'the name is :';
        var_dump($name);
        echo 'the arguments is :';
        var_dump($arguments);
//        throw new Exception('not exists method');
    }
}