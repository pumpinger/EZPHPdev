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
    //todo beforeaction

    public     $controller='';
    public     $action='';
    public     $assign='';


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


    public  final function Start(){
        $this->onStart();


    }

    public static function end(){


    }


    public function assign($data)
    {
        $this->assign=$data;
    }



    public function json($data)
    {
        if(isset($data)){
            $this->assign=$data;
        }

        echo json_encode($data);
    }


    public function render($data,$view="",$defaultlayout=false)
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