<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/28
 * Time: 下午1:23
 */

namespace EZPHP;


use EZPHP\core\controller;

class app extends  base{


    private static function _config($config){



        //自己托管了   错误 的处理 之后..  这里就失效了
        if($config['show_error']){
            ini_set('display_errors', 1);
        }else{
            ini_set('display_errors', 0);
        }


        error_reporting(E_ALL ^ E_NOTICE);

//        date_default_timezone_set(C('time_zone'));
    }
    
    
    
    public  static function run($config){
//        Header("HTTP/1.1 303 See Other");
//        Header("Location: http://baidu.com");

        self::_config($config);



        
        
        router::_router();
//        echo TEST;



    }


    public static function _loadAPP($controller,$action){


        if(file_exists('./core/controller/'.$controller.'.php')){
            include_once('./core/controller/'.$controller.'.php');
            $controllerClass=$controller.'Controller';
        }else{
            echo 'no file';exit;
        }



        /**
         * @var $newController controller
         */
        if( class_exists($controllerClass,false)){
            $newController=new $controllerClass;
            $newController->controller=$controller;
        }else{
            echo 'no controller';exit;
        }


        $actionMethod=$action.'Action';

        if( method_exists($newController,$actionMethod) ){
            $newController->action=$action;

            if( $newController->start()  !== false){

                $newController->$actionMethod();
                $newController->end();
            }



        }else{
            echo 'no action';exit;
        }

    }


}