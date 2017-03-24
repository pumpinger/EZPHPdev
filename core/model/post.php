<?php
use EZPHP\core\model;
use EZPHP\model\ISaveModel;

/**
 * Created by PhpStorm.
 * User: @van
 * Date: 2015/7/2
 * Time: 16:39
 */


class postModel extends model  implements ISaveModel  {





    function save()
    {
        // TODO: Implement save() method.
    }





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