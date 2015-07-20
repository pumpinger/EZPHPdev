<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/29
 * Time: 上午12:30
 */


class userController extends \EZPHP\core\controller{

    public function actionindex(){



//            throw new Exception('123');
        $a=cc::cc();
        $this->render(array(123,234,1232));


    }


}