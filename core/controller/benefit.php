<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/29
 * Time: 上午12:30
 */


class benefitController extends baseController {





    public function indexAction(){


        $res=moduleModel::intance()->getOne(3);
        $comment=module_commentModel::intance()->getModuleAll(3);


//        var_dump(postModel::intance()->getSql());


        $this->render(array(
            'data'=>$res,
            'comment'=>$comment
        ));
    }



}