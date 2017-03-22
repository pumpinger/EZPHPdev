<?php
use EZPHP\model\ISaveModel;

/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/29
 * Time: 上午12:30
 */



class postController extends baseController {

    public function newAction(){


//        $a=1/0;
//        throw new Exception('123');

        $this->render(array(123,234,1232));
    }

    public function saveAction()
    {



        $pm=new postModel();

        //$pm->save();

        $this->json();
    }


}

