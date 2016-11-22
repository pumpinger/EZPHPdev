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
    
    //todo  框架集成的  方法    db  log  dev  upload curl




    public static function init($userConfig)
    {

//        spl_autoload_register('EZPHP\EZPHP::autoLoad');
        spl_autoload_register(array('EZPHP\EZPHP','autoLoad'));


        set_error_handler('EZPHP\EZPHP::appError');
        set_exception_handler('EZPHP\EZPHP::appException');


        register_shutdown_function('EZPHP\EZPHP::appEnd');

        //trigger_error("what ?",E_USER_ERROR);

        //throw new EZException('111');

        //obstart
        global $defaultConfig;
        global $config;
        $config=array_merge($defaultConfig,$userConfig);

        dev::start();
        app::run($config);
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


    public static function appException($e){


        var_dump('触发了exception');
        var_dump($e);



        self::$need_log=true;
//        if($e instanceof ContrllerExption){
//
//        }
        $msg_head="<b>My Exception:</b> ". ($e->getMessage() ?: 'unkown error')." <b> In </b> (".$e->getLine().")".$e->getFile()."<br>";
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

    public static function appError($errno, $errstr, $errfile, $errline,$b)
    {

        var_dump('触发了error');
        var_dump($errno);
        var_dump($errstr);
        var_dump($errfile);
        var_dump($errline);

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
//        throw new EZException();

//        return true;
    }

    public static function appEnd(){
//        if(error_get_last()){
//            var_dump(error_get_last());
//        }

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