<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 2015/6/14
 * Time: 21:49
 */


//todo  obstart 用起来

const EZPHP_PATH = __DIR__;



define( 'APP_CONTROLLER_PATH',APP_PATH . 'core/controller/');
define( 'APP_VIEW_PATH',APP_PATH . 'core/view/');
define( 'APP_MODEL_PATH',APP_PATH . 'core/model/');
define( 'APP_LOGIC_PATH',APP_PATH . 'core/logic/');
define( 'APP_UTIL_PATH',APP_PATH . 'core/util/');
define( 'APP_LIB_PATH',APP_PATH . 'core/lib/');
define( 'LOG_PATH',APP_PATH . 'log/');

define( 'WEB_PATH',str_replace($_SERVER['DOCUMENT_ROOT'],"",APP_PATH));
define( 'HTTP_PATH','http://'.$_SERVER['HTTP_HOST'].str_replace($_SERVER['DOCUMENT_ROOT'],"",APP_PATH));
define( 'HTTPS_PATH','https://'.$_SERVER['HTTP_HOST'].str_replace($_SERVER['DOCUMENT_ROOT'],"",APP_PATH));
define( 'PUBLIC_PATH',WEB_PATH . 'public/');

include 'defaultConfig.php';
include 'functions.php';
include 'base.class.php';
include 'EZPHP.class.php';
include  APP_PATH .'core/functions.php';




