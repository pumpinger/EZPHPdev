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

        self::_router();
//        echo TEST;



    }

    public static function _router(){
        var_dump($_SERVER['REQUEST_URI']);
        var_dump($_SERVER['SCRIPT_NAME']);


        $app_url_no_host=$_SERVER['REQUEST_URI'];

        $app_folder=dirname($_SERVER['SCRIPT_NAME']);

        $app_param=str_replace($app_folder.'/',"",$app_url_no_host);

        $app_param_array=explode('/',$app_param);


//        var_dump(__DIR__);
//        var_dump(dirname($_SERVER['SCRIPT_FILENAME']));exit;


//        var_dump(($_SERVER['REQUEST_URI']));
//        var_dump($_SERVER['PHP_SELF']);exit;

//        $_temp  = explode('.php',$_SERVER['PHP_SELF']);
//        define('_PHP_FILE_',    rtrim(str_replace($_SERVER['HTTP_HOST'],'',$_temp[0].'.php'),'/'));


        $action=null;
        $controller=null;

        $urlUtil=array('controller','action','param');

        var_dump(array_filter($app_param_array) );

        if( array_filter($app_param_array) ){
            foreach ($urlUtil as $k =>$v) {
                if( isset($app_param_array[$k])){
                    $$v=$app_param_array[$k];
                }else{
                    $$v=null;
                }
            }
        }

        self::_loadAPP($controller,$action);


    }



    private static function _loadAPP($c='index',$a='index'){





        if(  isset($param) ){
            foreach(explode('&',APP_NAME) as $v  ){
                $item=explode('=',$v);
                $_GET[$item[0]]=$item[1];
            }
        }


        if(file_exists('./core/c/'.$c.'.php')){
            include_once('./core/c/'.$c.'.php');
        }else{
            echo 'no file';exit;
        }

        if( class_exists($c,false)){
            $cObj=new $c;
        }else{
            echo 'no c';exit;
        }


        if( method_exists($c,$a) ){
            $cObj->$a();
        }else{
            echo 'no action';exit;
        }

    }

}