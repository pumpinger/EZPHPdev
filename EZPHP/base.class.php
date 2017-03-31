<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/28
 * Time: 下午1:23
 */

namespace EZPHP;


class base {
    


    //如果没有这个方法 没找到类 可能是Fatal Error
    public function __call($name,$arguments) {
        throw new \Exception('not exists method:'.$name);
    }

    public function ___callStatic($name,$arguments) {
        throw new \Exception('not exists method:'.$name);
    }
}