<?php
/**
 * Created by PhpStorm.
 * User: @van
 * Date: 2015/7/2
 * Time: 16:39
 */


class postModel extends \EZPHP\core\model{

    
    public function getAll()
    {
        $res=$this->query();

        return $res;
    }


    public function getHot()
    {
        $res=$this->setEqual(array('status'=>'1'))->setOrder(array('like'=>'DESC'))->query();

        return $res;
    }
    

}