<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/29
 * Time: 上午12:30
 */


class testController extends \EZPHP\core\controller{

    public function actionindex(){


        exit;
        echo  json_encode(array(
            'a'=>121231,
            'b'=>45,
            'c'=>1234,
            'd'=>'水电费'
        ));


    }


}