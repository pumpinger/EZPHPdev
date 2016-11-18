<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/28
 * Time: 下午1:23
 */

namespace EZPHP;


class app extends  base{


    private static function _config($config){
        if($config['show_error']){
            ini_set('display_errors', 1);
        }else{
            ini_set('display_errors', 0);
        }


        error_reporting(E_ALL ^ E_NOTICE);


//        date_default_timezone_set(C('time_zone'));
    }
    
    
    
    public  static function run($userConfig){
//        Header("HTTP/1.1 303 See Other");
//        Header("Location: http://baidu.com");


        global $defaultConfig;
        global $config;
        $config=array_merge($defaultConfig,$userConfig);

        self::_config($config);
        
        
        router::_router();
//        echo TEST;



    }


}