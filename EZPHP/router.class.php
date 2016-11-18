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

        self::_router();
//        echo TEST;



    }

    public static function _router(){


        //todo  url uncode
        //todo  支持控制器分组

        //$app_url( $app_folder + $app_param($router_param + $get_param) )

        $app_url=$_SERVER['REQUEST_URI'];

        $app_folder=dirname($_SERVER['SCRIPT_NAME']);

        $app_param=str_replace($app_folder.'/',"",$app_url);

        $app_param_array=explode('?',$app_param);

        $router_param=array_shift($app_param_array);

        $get_param = implode('&',$app_param_array);

        $router_param_array=explode('/',$router_param);

//        var_dump(__DIR__);
//        var_dump(dirname($_SERVER['SCRIPT_FILENAME']));exit;


//        var_dump(($_SERVER['REQUEST_URI']));
//        var_dump($_SERVER['PHP_SELF']);exit;

//        $_temp  = explode('.php',$_SERVER['PHP_SELF']);
//        define('_PHP_FILE_',    rtrim(str_replace($_SERVER['HTTP_HOST'],'',$_temp[0].'.php'),'/'));

        $controller=$router_param_array[0];
        if(isset($router_param_array[1])){
            $action=$router_param_array[1];

        }else{
            $action='index';
        }

        var_dump($controller,$action);exit;

        self::_loadAPP($controller,$action);

    }



    private static function _loadAPP($controller,$action){

        if( !$controller){
            $controller='index';
        }
        $action=$action?$action:'index';

        if(file_exists('./core/controller/'.$controller.'.php')){
            include_once('./core/controller/'.$controller.'.php');
            $controllerClass=$controller.'Controller';
        }else{
            echo 'no file';exit;
        }

        if( class_exists($controllerClass,false)){
            $newController=new $controllerClass;
            $newController->controller=$controller;
        }else{
            echo 'no controller';exit;
        }


        $actionMethod='action'.$action;

        if( method_exists($newController,$actionMethod) ){
            $newController->action=$action;
            $newController->$actionMethod();

        }else{
            echo 'no action';exit;
        }

    }

}