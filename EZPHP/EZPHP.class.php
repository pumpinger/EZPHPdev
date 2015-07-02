<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/28
 * Time: 下午12:13
 */

namespace EZPHP;


class EZPHP {

    private  static $success_end=false;
    private static $need_log=false;


    public static function init()
    {


        spl_autoload_register('EZPHP\EZPHP::autoLoad');


        set_error_handler('EZPHP\EZPHP::appError');
        set_exception_handler('EZPHP\EZPHP::appException');


        register_shutdown_function('EZPHP\EZPHP::appEnd');


//        trigger_error("what ?",E_USER_ERROR);
//        throw new \Exception('111');
        //obstart


        ob_start();
        dev::start();
        app::run();
        dev::end();
        EZPHP::$success_end=true;
    }


    public static function autoLoad($class){
        var_dump($class);echo '--';
        
        if($class == 'indexM'){
            var_dump(APP_PATH);
            include APP_PATH.'/core/m/index.php';
        }
        //todo  这里对   命e名空间的支持 还要改进
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

        echo "<pre>".var_dump(debug_print_backtrace())."</pre>";
        /* Don't execute PHP internal error handler */
        return true;
    }

    public static function appEnd(){
        //todo  怎么替换 系统致命错误
        if(!self::$success_end){
            echo  '<br />unknown fatal error';
        }else{
            echo  "<br />all is over successfully !";

        }

        //todo  检查写入权限
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