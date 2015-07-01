<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 2015/6/14
 * Time: 21:49
 */




// url模式 为  http://127.0.0.1[/router]/test/index/p=123
$appName='router';


$urlA=explode( '/',ltrim($_SERVER['REQUEST_URI'],'/') );

$urlUtil=array('appName','c','a','param');


if($urlA[0] != $appName){
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
    foreach(explode('&',$param) as $v  ){
        $item=explode('=',$v);
        $_GET[$item[0]]=$item[1];
    }
}

if(file_exists('c/'.$c.'.php')){
    include_once('c/'.$c.'.php');
}else{
    echo '没有这个文件';exit;
}

if( class_exists($c)){
    $cObj=new $c();
}else{
    echo '没有这个控制器';exit;
}

if( method_exists($c,$a)){
    $cObj->$a();
}else{
    echo '没有这个方法';exit;
}




