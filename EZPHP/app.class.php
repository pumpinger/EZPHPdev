<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/28
 * Time: 下午1:23
 */

namespace EZPHP;


class app {
    public static function start(){
        echo 'welcome app class';


        echo TEST;

        $urlA=explode( '/',ltrim($_SERVER['REQUEST_URI'],'/') );

//        var_dump(__DIR__);   //todo  分辨 这两种区别
//        var_dump(dirname($_SERVER['SCRIPT_FILENAME']));exit;


//        var_dump(($_SERVER['REQUEST_URI']));
//        var_dump($_SERVER['PHP_SELF']);exit;

//        $_temp  = explode('.php',$_SERVER['PHP_SELF']);
//        define('_PHP_FILE_',    rtrim(str_replace($_SERVER['HTTP_HOST'],'',$_temp[0].'.php'),'/'));




        $urlUtil=array('appName','c','a','param');


        if($urlA[0] != APP_NAME){
            array_shift($urlUtil);
        }


        foreach ($urlUtil as $k =>$v) {
            if( isset($urlA[$k])){
                $$v=$urlA[$k];
            }else{
                $$v=null;
            }
        }


        if( !isset($c) ){
            $c='indexC';
        }else{
            $c=$c.'C';
        }

        if(  !isset($a) ){
            $a='index';
        }

        if(  !isset($param) ){
            foreach(explode('&',APP_NAME) as $v  ){
                $item=explode('=',$v);
                $_GET[$item[0]]=$item[1];
            }
        }

        if(file_exists('c/'.$c.'.php')){
            include_once('c/'.$c.'.php');
        }else{
            echo 'no file';
        }

        if( class_exists($c)){
            $cObj=new $c();
        }else{
            echo 'no c';
        }

        if( method_exists($c,$a)){
            $cObj->$a();
        }else{
            echo 'no action';
        }







    }

}