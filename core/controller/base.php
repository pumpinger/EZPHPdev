<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/6
 * Time: 16:25
 */

class baseController extends \EZPHP\core\controller{



    public function onRender()
    {
        $this->setLayout(APP_VIEW_PATH.'layout/home.php');
        $this->setTitle('EZPHPDev');
    }

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }


    public function onStart()
    {

        session_start();

        if( ! $_SESSION){
            R(301,$this->makeUrl('login'));
            return false;
        }


        parent::onStart();
    }
    
    


}