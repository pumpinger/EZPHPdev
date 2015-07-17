<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 2015/6/14
 * Time: 21:49
 */


//ob_start();


const EZPHP_PATH=__DIR__;
define( 'APP_CONTROLLOER_PATH',APP_PATH . '/core/controller');
define( 'APP_VIEW_PATH',APP_PATH . '/core/view');
define( 'APP_MODEL_PATH',APP_PATH . '/core/model');
define( 'APP_LOGIC_PATH',APP_PATH . '/core/logic');
define( 'APP_UTIL_PATH',APP_PATH . '/core/util');

include 'functions.php';
include 'base.class.php';
include 'EZPHP.class.php';


EZPHP\EZPHP::init();


