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

        if($class == 'indexModel'){
            include APP_PATH.'/core/m/index.php';
        }
        $name           =   str_replace('\\','/',$class);
        $filename       =  $name.'.class.php';

        if(is_file($filename)) {
            include $filename;
        }
    }

    public static function appException($e){
        self::$need_log=true;
        echo '--Exception catch--';
        echo "<b>Exception:</b> " , $e->getMessage();
//        echo $exception->getTrace();
    }

    public static function appError($errno, $errstr, $errfile, $errline)
    {
        self::$need_log=true;
        echo '--Error catch--';
        $errfile=str_replace(getcwd(),"",$errfile);
//        $errfile=str_replace(__DIR__,"",$errfile);

        switch ($errno) {
            case E_USER_ERROR:

                echo "<b>ERROR</b> [$errno] $errstr<br />\n";
                echo "  Fatal error on line $errline in file $errfile <br />\n";
                break;

            case E_USER_WARNING:
                echo "<b>WARNING</b> [$errno] $errstr<br />\n";
                break;

            case E_USER_NOTICE:
                echo "<b>NOTICE</b> [$errno] $errstr<br />\n";
                break;

            default:
                echo "Unknown error type: [$errno] $errstr<br />\n";
                break;
        }

//        echo "<pre>".var_dump(debug_print_backtrace())."</pre>";
        /* Don't execute PHP internal error handler */
        return true;
    }

    public static function appEnd(){
        var_dump(error_get_last());
        var_dump(error_reporting());
        //restore_error_handler();
        //error_log
        var_dump(debug_print_backtrace());
        if(!self::$success_end){
            echo  '<br />unknown fatal error';
        }else{
            echo  "<br />all is over successfully !";

        }

        if(EZPHP::$need_log){


            $log=ob_get_contents();
            ob_clean();


            echo $log;

//        $logDir=getcwd().'/log';
            $logDir='/Users/wangzhongjiang/Sites/EZPHPdev/log';

            file_put_contents("$logDir/".time().".txt",$log);



        }




    }





}