<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/28
 * Time: 下午12:13
 */

namespace EZPHP;



use Exception;
use EZPHP\log\log;

class EZPHP extends base{

    private static $success_end=false;
    private static $need_log=false;
    
    //todo  框架集成的  方法    db  log  dev   curl  session       \\ 插件   验证码   upload




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

        $findArr=array(
            APP_MODEL_PATH=>'Model',
            APP_CONTROLLER_PATH=>'Controller',
        );

        $filename="";
        foreach ($findArr as $k=>$v) {
            if(   strrchr($class,$v)   ==   $v   ){
                $filename=$k.'/'. substr($class,0,-strlen($v)).'.php';
                if(  is_file($filename)  ){
                    break;
                }
            }
        }

        if(!is_file( $filename )){
            //util
            $filename=APP_UTIL_PATH.'/'.$class.'.php';
            if(!is_file($filename)) {
                //namespace

                $name = str_replace('\\', '/', $class);
                //以后不要加 这个class 了
                $filename1 = $name . '.class.php';
                $filename2 = $name . '.php';
                if ( !is_file($filename1)  &&  !is_file($filename2)  ) {
                    throw new \Exception('没有找到类'.$class);  //todo  这里扔出  代码写法类型的  异常
                }else{
                    if( is_file($filename1) ){
                        $filename=$filename1;
                    }

                    if( is_file($filename2) ){
                        $filename=$filename2;
                    }

                }
            }
        }

        include $filename;

    }


    public static function appException(Exception $e){

        //html
        //code
        //ez
        //        var_dump(3);exit;



        self::$need_log=true;
        $msg_head="Exception:<b> ". ($e->getMessage() ?: 'unkown error')." </b> In : ".$e->getFile()."(".$e->getLine().")"."<br>";
        $msg_body='';
        $msg_array=$e->getTrace();



        foreach ($msg_array as $k => $v) {

            if(   isset($v['class'])  and  $v['class'] ==  __CLASS__ and $v['function'] == 'autoLoad'){
                //$msg_head="<b>Exception:</b> ".$v['args']['1']." <b> In </b> (".$v['args']['3'].")".$v['args']['2']."<br>";
            }else{
                $funName='';
                if(isset($v['class'])  &&  $v['class']){
                    $funName=$v['class'].'->';
                }
                $funName.=$v['function'];
                if(isset($v['args'])  &&  $v['args']){


                    $funName.="(";

                    foreach ($v['args'] as $v2) {
                        if(is_array($v2)){
                            $funName.='Array,';

                        }else{
                            $funName.=$v2.',';

                        }
                    }

                    $funName.=")";


                }



                $msg_body.="#".$k." ".$v['file']."(".$v['line']."):".$funName.'<br>';
            }



        }




        echo $msg_head;
        echo $msg_body;
    }

    public static function appError($errno, $errstr, $errfile, $errline)
    {

//        $errfile=str_replace(getcwd(),"",$errfile);
        switch ($errno) {
            case E_NOTICE:

                new log($errstr,'notice');
                break;
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

            default:

                throw new \Exception($errstr.$errfile.$errline);  //todo  这里扔出  代码写法类型的  异常



//                echo "Unknown error type: [$errno] $errstr<br />\n";
                break;
        }

    }

    public static function appEnd(){


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