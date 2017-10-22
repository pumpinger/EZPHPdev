<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/6
 * Time: 16:25
 */

class adminController extends baseController {




    public function onRender()
    {


        $this->setLayout(APP_VIEW_PATH.'layout/admin.php');


        $this->setTitle('EZPHPDev');
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




    public function indexAction()
    {


        $this->render();


    }




}