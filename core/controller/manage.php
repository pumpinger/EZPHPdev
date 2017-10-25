<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/29
 * Time: 上午12:30
 */


class manageController extends adminController  {





    public function classAction(){



        $id = $_GET['id'];

        $res=classModel::intance()->getOne($id);



//        var_dump(postModel::intance()->getSql());



        $this->render($res);
//        $this::cc();



//        include_once 'e.php';
//        throw new e(1000);
    }



    public function classSaveAction()
    {


        $id = $_GET['id'];




        $res=classModel::intance()->chgOne(
            array(
                'content'=>$_REQUEST['content'],
                'name'=>$_REQUEST['name'],
                'price'=>$_REQUEST['price'],
            ),$id
        );




        if( $res ){
            $this->json();
        }else{
            //todo 这里 这么做 json  的 exception  现在是 html
            throw new \EZPHP\Exception\myException('保存失败');

        }



    }




    public function benefitAction()
    {
        $res=moduleModel::intance()->getOne(3);

        $this->render($res);

    }

    public function communityAction()
    {
        $res=moduleModel::intance()->getOne(1);

        $this->render($res);

    }




    public function appAction()
    {
        $res=moduleModel::intance()->getOne(2);

        $this->render($res);

    }


    public function appSaveAction()
    {
        $res=moduleModel::intance()->getOne(2);

        $this->render($res);

    }




    public function settingAction(){


        $qrRes=settingModel::intance()->getAll();
        $linkRes=linkModel::intance()->getAll();


//        var_dump(postModel::intance()->getSql());



        $this->render(array(
            'qr'=>$qrRes,
            'link'=>$linkRes,
        ));
//        $this::cc();



//        include_once 'e.php';
//        throw new e(1000);
    }


    public function settingSaveAction(){





        linkModel::intance()->delAll();

        $res = true;

        foreach ($_REQUEST['name'] as  $k => $v) {


            if(!$v){
                continue;
            }


            $res=linkModel::intance()->addOne(
                array(
                    'name'=>$v,
                    'link'=>$_REQUEST['link'][$k]
                )
            );

            if( ! $res ){
                break;
            }
        }



        if($res){
            $this->json();

        }else{
            throw new \EZPHP\Exception\myException('保存失败');


        }




//        include_once 'e.php';
//        throw new e(1000);
    }




    public function aboutAction(){



        $res=aboutModel::intance()->getAll();


//        var_dump(postModel::intance()->getSql());



        $this->render($res);
//        $this::cc();



//        include_once 'e.php';
//        throw new e(1000);
    }

    public function aboutSaveAction()
    {


        $res1=aboutModel::intance()->chgOne(
            array('content'=>$_REQUEST['content_1']),1
        );

        $res2=aboutModel::intance()->chgOne(
            array('content'=>$_REQUEST['content_2']),2
        );


        $res3=aboutModel::intance()->chgOne(
            array('content'=>$_REQUEST['content_3']),3
        );


        $res4=aboutModel::intance()->chgOne(
            array('content'=>$_REQUEST['content_4']),4
        );


        $res5=aboutModel::intance()->chgOne(
            array('content'=>$_REQUEST['content_5']),5
        );




        if( $res1  &&  $res2  && $res3  &&  $res4  &&  $res5){
            $this->json();
        }else{
            //这里 这么做 json  的 exception
            throw new \EZPHP\Exception\myException('保存失败');

        }



    }



}