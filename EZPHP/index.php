<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 2015/6/14
 * Time: 21:49
 */

//todo  定义常量
const TEST= '--CONST TEST--';


//todo  config

include 'functions.php';
include 'EZPHP.class.php';



//todo   当这里得 init 不是静态方法得时候 还是可以调用。。  为什么 。。。 不过后面程序不正常
EZPHP\EZPHP::init();


