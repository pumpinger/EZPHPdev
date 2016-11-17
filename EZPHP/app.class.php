<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/28
 * Time: 下午1:23
 */

namespace EZPHP;


class app extends  base{
    public  static function run(){
//        Header("HTTP/1.1 303 See Other");
//        Header("Location: http://baidu.com");

        router::_router();
//        echo TEST;



    }


}