<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/29
 * Time: 上午12:30
 */


class loginController extends \EZPHP\core\controller{

    public function indexAction(){
        $this->render();

    }
    
    public function logoutAction()
    {
        session_destroy();
        R(301);
    }



    public function loginAction()
    {
        $account=$_GET['account'];
        $password=$_GET['password'];


        $res=userModel::intance()->getUserByaccout($account);


        if($res){

            if(  $res['password']  == $password  ){


                session_start();
                $_SESSION['account']=$account;
                $_SESSION['id']=$res['id'];



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