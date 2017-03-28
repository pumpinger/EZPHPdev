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


    public function checkParam()
    {

    }


    function save()
    {
        // TODO: Implement save() method.
    }




    public function addOne($data)
    {
        $res=$this->db()->add($data);

        return $res;
    }

    public function getAll()
    {
        $res=$this->db()->query();

        return $res;
    }



    public function getHot()
    {
        $res=$this->db()->setEqual(array('status'=>'1'))->setOrder(array('like'=>'DESC'))->query();

        return $res;
    }
///0



}