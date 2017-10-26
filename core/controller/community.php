<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/29
 * Time: 上午12:30
 */


class communityController extends baseController {





    public function indexAction(){

        $res=moduleModel::intance()->getOne(1);
        $comment=module_commentModel::intance()->getModuleAll(1);


//        var_dump(postModel::intance()->getSql());


        $this->render(array(
            'data'=>$res,
            'comment'=>$comment
        ));
    }



}