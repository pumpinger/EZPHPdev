<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/28
 * Time: 下午12:05
 */

//ini_set('display_errors', true);



//todo 关于乱码的处理   网页 还能通过  meta    cli  api 呢
//todo 对了 cli 怎么实现

//header("Content-Type:text/html;charset=utf-8");




const APP_NAME='EZPHPdev';
const APP_PATH=__DIR__;
//sdf

require './EZPHP/index.php';


$config1=include APP_PATH.'/config.php';
$config2=include APP_PATH.'/setting.php';

EZPHP\EZPHP::init(array_merge($config1,$config2));
