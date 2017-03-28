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
        $data=array(
            'province'=>$_POST['province'],
            'title'=>$_POST['title'],
            'city'=>$_POST['city'],
            'tag'=>$_POST['tag'],
            'content'=>$_POST['content'],
            'district'=>$_POST['district'],
            'a'=>$_POST['district'],
        );

        //todo 这里 每一个 字段 都是一个class
//        $pm=new postModel();
//        $pm->save();


        postModel::intance()->addOne($data);

        $this->json();
    }


}

