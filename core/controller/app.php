<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/29
 * Time: 上午12:30
 */


class appController extends baseController {





    public function indexAction(){



        $res=moduleModel::intance()->getOne(2);
        $comment=module_commentModel::intance()->getModuleAll(2);


//        var_dump(postModel::intance()->getSql());


        $this->render(array(
            'data'=>$res,
            'comment'=>$comment
        ));
//        $this::cc();



//        include_once 'e.php';
//        throw new e(1000);
    }



}