<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/28
 * Time: 下午1:23
 */

namespace EZPHP;


class dev extends  base{

    public static $start_emory=0;
    public static $end_emory=0;
    public static $peak_emory=0;



    public static function start(){
        //todo  时间 内存

        self::$start_emory=round(memory_get_usage()/1024/1024, 2).'MB';




    }

    public static function end(){
        //todo  时间内存
        self::$end_emory=round(memory_get_usage()/1024/1024, 2).'MB';
        self::$peak_emory=round(memory_get_peak_usage()/1024/1024, 2).'MB';




    }

}

?>
