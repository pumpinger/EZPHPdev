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

    public     $layout='';
    public     $view='';
    public     $title='';

    
    public  $mRequest;
    public  $mRender;


    public $start=array();



    public function onStart()
    {
        return true;
    }

    public function onEnd(){

    }

    public function onRender(){

    }

    public  final function start(){
        return $this->onStart();
    }

    public final function end(){
        $this->onEnd();

    }


    public function makeUrl($c='index',$a='index',$param=array()){


        $paramString='';
        foreach ($param as $k=>$v) {
            $paramString.='&'.$k.'='.$v;
        }


        return  HTTP_PATH.'index.php?c='.$c.'&a='.$a.$paramString;

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
        $this->onRender();

        if(isset($data)){
            $this->assign=$data;
        }

        $this->view='./core/view/'.$this->controller.'/'. $this->action.'.php';


        if($this->layout){

            if(   file_exists($this->layout)  ){
                include_once($this->layout);

            }else{
                throw new \Exception('找不到布局文件');
            }


        }else{

            if(  file_exists(  $this->view  )  ){
                include_once($this->view);
            }else{
                throw new \Exception('找不到视图文件');
            }

        }


    }

}