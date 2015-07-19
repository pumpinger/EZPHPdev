<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/28
 * Time: 下午1:23
 */

namespace EZPHP\core;


use EZPHP\base;

class model extends base{


    private     $controller='';
    private     $action='';
    private     $assign='';



    public function __get($p)
    {
        return $this->$p;
    }

    public function __set($p,$v)
    {
        $this->$p=$v;
    }


    public  function start(){
        echo 'welcome core class';





        //难道把代码放到 try 里面去？
//        try {
//            $o = new TestException(TestException::THROW_CUSTOM);
//        } catch (MyException $e) {      // 捕获异常
//            echo "Caught my exception\n", $e;
//            $e->customFunction();
//        } catch (Exception $e) {        // 被忽略
//            echo "Caught Default Exception\n", $e;
//        }

    }

    public static function end(){
        echo 'welcome core class2';


    }


    public function assign($data)
    {
        $this->assign=$data;
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