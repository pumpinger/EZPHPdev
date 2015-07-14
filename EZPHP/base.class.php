<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/28
 * Time: 下午1:23
 */

namespace EZPHP;


class base {




    public function __get($p)
    {
        return $this->$p;
    }

    public function __set($p,$v)
    {
        $this->$p=$v;
    }


    //__Get __set


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