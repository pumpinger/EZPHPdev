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

    private static $config=array(
        'time_zone'=>'prc'
    );


    public static function init()
    {

        date_default_timezone_set(self::$config['time_zone']);
        error_reporting(E_ALL ^ E_NOTICE);
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

        spl_autoload_register('EZPHP\EZPHP::autoLoad');


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
                    //todo  报错  给我使劲报错
                }
            }
        }
        include $filename;


    }

    public static function appException($e){

        self::$need_log=true;

        echo "<b>Exception:</b> " , $e->getMessage();
//        echo $exception->getTrace();
    }

    public static function appError($errno, $errstr, $errfile, $errline)
    {
        $errfile=str_replace(getcwd(),"",$errfile);


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
        //todo  扔出
        $msg=array(
            'err_msg'=>$errstr,
            'err_leave'=>$errno,
            'err_file'=>$errfile,
            'err_line'=>$errline,
        );
        var_dump($msg);
        return true;
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


//        if(self::$need_log){
            self::log();
//        }








    }

    public static function log()
    {
//        var_dump(ob_get_contents());
        file_put_contents(LOG_PATH."/".date('Y-m-d-H').".txt",ob_get_contents(),FILE_APPEND);
    }





}