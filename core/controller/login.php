<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/29
 * Time: 上午12:30
 */


class loginController extends \EZPHP\core\controller{

    public function indexAction(){

//            throw new Exception('123');
        $this->render();

    }


    public function loginAction()
    {
        $account=$_GET['account'];
        $password=$_GET['password'];


        $res=userModel::intance()->getUserByaccout($account);


        if($res){

            if(  $res['password']  == $password  ){
                $this->json();

            }else{
                $this->json(array(
                    'ok'=>false,
                    'msg'=>'密码错误',
                ));

            }

        }else{
            $this->json(array(
                'ok'=>false,
                'msg'=>'没有这个棱',
            ));

        }


    }








}