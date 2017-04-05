<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/29
 * Time: 17:01
 */

namespace EZPHP\log;


use EZPHP\base;

class log extends base
{

    public function __construct($content,$dir='debug',$file='',$line='')
    {


        ob_start();
        echo '【CONT】:';
        if(   is_array($content)){

            print_r($content);

        }else{
            print($content);
        }

        $content=ob_get_contents();
        ob_end_clean();

        $content='【TIME】:'.date('Y-m-d H:i:s')."\r\n".$content;


        if(!$file){
            $debugArr=debug_backtrace();
            $file=$debugArr[0]['file'];
            $line=$debugArr[0]['line'];
        }



        $content=$content."\r\n"."【FLIE】:".$file."(".$line.")";



        if( ! file_exists(LOG_PATH.$dir)  ){
            mkdir(LOG_PATH.$dir);
        }


        file_put_contents(LOG_PATH.$dir."/".date('Y-m-d-H').".txt",$content."\r\n\n\n",FILE_APPEND);


    }


}