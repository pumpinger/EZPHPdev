<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/28
 * Time: 下午12:13
 */

namespace EZPHP;


class EZPHP extends base{

    private static $success_end=false;
    private static $need_log=false;




    public static function init()
    {
//        error_reporting(E_ALL ^ E_NOTICE);

        error_reporting(0);
        ini_set('display_errors', 1);
        date_default_timezone_set(C('time_zone'));
//        error_reporting(E_ALL ^ E_NOTICE);
        //todo  加载 配置
//        session_start();
//        date_default_timezone_set(C('timeZone'));
//        if(true === C('debug')) {
//            echo 'debug mode:';
//            ini_set('display_errors','On');
//            error_reporting(C('errorReporting'));
//        } else {
//            error_reporting(0);
//            ini_set('display_errors','Off');
//        }

//        spl_autoload_register('EZPHP\EZPHP::autoLoad');
        spl_autoload_register(array('EZPHP\EZPHP','autoLoad'));


        set_error_handler('EZPHP\EZPHP::appError');
        set_exception_handler('EZPHP\EZPHP::appException');


        register_shutdown_function('EZPHP\EZPHP::appEnd');


//        trigger_error("what ?",E_USER_ERROR);
//        throw new \Exception('111');
        //obstart


        dev::start();
//        $app=new app();
//        $app->run();
        app::run();
        dev::end();
        EZPHP::$success_end=true;
    }


    public  static  function autoLoad($class){
        //todo  这里的判断条件略简陋
        $filename=APP_MODEL_PATH.'/'.rtrim($class,'Model').'.php';
        if(!is_file( $filename )){
            $filename=APP_UTIL_PATH.'/'.$class.'.php';
            if(!is_file($filename)) {
                $name = str_replace('\\', '/', $class);
                $filename = $name . '.class.php';
                if (!is_file($filename)) {
                    throw new \Exception('没有找到类'.$class);
                }
            }
        }
        include $filename;


    }


//array (size=10)
//0 =>
//array (size=6)
//'file' => string 'E:\WAMP\www\EZPHPdev\EZPHP\EZPHP.class.php' (length=42)
//'line' => int 78
//'function' => string 'appError' (length=8)
//'class' => string 'EZPHP\EZPHP' (length=11)
//'type' => string '::' (length=2)
//'args' =>
//array (size=5)
//0 => int 2
//1 => string 'include(cc.class.php): failed to open stream: No such file or directory' (length=71)
//2 => string 'E:\WAMP\www\EZPHPdev\EZPHP\EZPHP.class.php' (length=42)
//3 => int 78
//4 =>
//array (size=3)
//...
//1 =>
//array (size=5)
//'file' => string 'E:\WAMP\www\EZPHPdev\EZPHP\EZPHP.class.php' (length=42)
//'line' => int 78
//'function' => string 'autoLoad' (length=8)
//'class' => string 'EZPHP\EZPHP' (length=11)
//'type' => string '::' (length=2)

    public static function appException($e){

        self::$need_log=true;
//        if($e instanceof ContrllerExption){
//
//        }
        $msg_head="<b>Exception:</b> ". ($e->getMessage() ?: 'unkown error')." <b> In </b> (".$e->getLine().")".$e->getFile()."<br>";
        $msg_body='';
        $msg_array=$e->getTrace();

        foreach ($msg_array as $v) {
            // and  $v['class'] ==  __CLASS__
            if(   isset($v['class'])  and  $v['class'] ==  __CLASS__ and $v['function'] == 'appError'){
                $msg_head="<b>Exception:</b> ".$v['args']['1']." <b> In </b> (".$v['args']['3'].")".$v['args']['2']."<br>";
            }else{
//                $msg_body.="(".$v['line']."):";
            }
        }

        echo $msg_head;
        echo (nl2br($e->getTraceAsString()));
    }

    public static function appError($errno, $errstr, $errfile, $errline)
    {
//        $errfile=str_replace(getcwd(),"",$errfile);


//        $errfile=str_replace(__DIR__,"",$errfile);

//        switch ($errno) {
//            case E_USER_ERROR:
//
//                echo "<b>ERROR</b> [$errno] $errstr<br />\n";
//                echo "  Fatal error on line $errline in file $errfile <br />\n";
//                break;
//
//            case E_USER_WARNING:
//                echo "<b>WARNING</b> [$errno] $errstr<br />\n";
//                break;
//
//            case E_USER_NOTICE:
//                echo "<b>NOTICE</b> [$errno] $errstr<br />\n";
//                break;
//
//            default:
//                echo "Unknown error type: [$errno] $errstr<br />\n";
//                break;
//        }
//        debug_print_backtrace();
        /* Don't execute PHP internal error handler */
//        $msg=array(
//            'err_msg'=>$errstr,
//            'err_leave'=>$errno,
//            'err_file'=>$errfile,
//            'err_line'=>$errline,
//        );
//        var_dump($msg);
//        var_dump(debug_backtrace());
        throw new \Exception();

//        return true;
    }

    public static function appEnd(){
        if(error_get_last()){
            var_dump(error_get_last());
        }
//        var_dump(error_reporting());
//        var_dump(  restore_error_handler());
        //error_log
//        var_dump(debug_print_backtrace());




//            $log=ob_get_contents();
//            ob_clean();

//        echo ($log);


        if(self::$need_log){
            self::log();
        }








    }

    public static function log()
    {
//        var_dump(ob_get_contents());
        file_put_contents(LOG_PATH."/".date('Y-m-d-H').".txt",ob_get_contents(),FILE_APPEND);
    }





}