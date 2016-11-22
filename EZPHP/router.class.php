<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/28
 * Time: 下午1:23
 */

namespace EZPHP;


class router extends  base{
    public  static function run(){
//        Header("HTTP/1.1 303 See Other");
//        Header("Location: http://baidu.com");

//        echo TEST;



    }

    public static function _router(){


        //todo  url uncode
        //todo  这里$_GET 就可以了 但是以后可能要改  就多取一些值

        //$app_url( $app_folder + $app_param($router_param + $get_param) )


        //文件夹，文件名，参数
        $app_url=$_SERVER['REQUEST_URI'];

        //文件夹
        $app_folder=dirname($_SERVER['SCRIPT_NAME']);

        //文件名，参数
        $app_param=str_replace($app_folder.'/',"",$app_url);
        $app_param_array=explode('?',$app_param);

        //参数
        $param=array_pop($app_param_array);

        $param_array = explode('&',$param);

        $param_map=array(
            'c'=>'index',
            'a'=>'index',
        );
        foreach ($param_array as $v) {
            $temp=explode('=',$v);
            if(isset($temp[1])){
                $param_map[$temp[0]]= $temp[1];
            }
        }



//        var_dump(__DIR__);
//        var_dump(dirname($_SERVER['SCRIPT_FILENAME']));exit;


//        var_dump(($_SERVER['REQUEST_URI']));
//        var_dump($_SERVER['PHP_SELF']);exit;

//        $_temp  = explode('.php',$_SERVER['PHP_SELF']);
//        define('_PHP_FILE_',    rtrim(str_replace($_SERVER['HTTP_HOST'],'',$_temp[0].'.php'),'/'));

        $controller=$param_map['c'];
        $action=$param_map['a'];

        app::_loadAPP($controller,$action);

    }




}