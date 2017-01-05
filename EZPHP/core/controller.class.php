<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/28
 * Time: 下午1:23
 */

namespace EZPHP\core;


use EZPHP\base;

class controller extends base{

    public     $controller='';
    public     $action='';
    public     $assign='';
    
    public  $mRequest;
    public  $mRender;


    public $start=array();

    public function __get($p)
    {
        return $this->$p;
    }

    public function __set($p,$v)
    {
        $this->$p=$v;
    }

    public function onStart()
    {
    }

    public function onEnd(){

    }

    public function onRender(){}

    public  final function start(){
        $this->onStart();
    }

    public final function end(){
        $this->onEnd();

    }


    public function makeUrl($c='index',$a='index',$param=array()){


        $paramString='';
        foreach ($param as $k=>$v) {
            $paramString.='&'.$k.'='.$v;
        }


        echo  HTTP_PATH.'index.php?c='.$c.'&a='.$a.$paramString;

    }


    public function assign($data)
    {
        $this->assign=$data;
    }



    public function json($data=array())
    {
        if(isset($data)){
            $this->assign=$data;
        }

        echo json_encode(array_merge(array(
            'ok'=>true,
            'servers_time'=>time(),
        ),$data));
    }


    public function render($data=array())
    {
        if(isset($data)){
            $this->assign=$data;
        }

        if(file_exists('./core/view/'.$this->controller.'/'. $this->action.'.php')){
            include_once('./core/view/'.$this->controller.'/'. $this->action.'.php');
        }else{
            echo 'no file';exit;
        }
    }

}