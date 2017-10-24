<?php
/**
 * Created by PhpStorm.
 * User: wangzhongjiang
 * Date: 15/6/29
 * Time: 上午12:30
 */


class manageController extends adminController  {





    public function indexAction(){



        $res=classModel::intance()->getAll();


//        var_dump(postModel::intance()->getSql());



        $this->render($res);
//        $this::cc();



//        include_once 'e.php';
//        throw new e(1000);
    }

    public function classSaveAction()
    {


        $res1=classModel::intance()->chgOne(
            array('content'=>$_REQUEST['content_1']),1
        );

        $res2=classModel::intance()->chgOne(
            array('content'=>$_REQUEST['content_2']),2
        );


        $res3=classModel::intance()->chgOne(
            array('content'=>$_REQUEST['content_3']),3
        );


        $res4=classModel::intance()->chgOne(
            array('content'=>$_REQUEST['content_4']),4
        );


        $res5=classModel::intance()->chgOne(
            array('content'=>$_REQUEST['content_5']),5
        );



        if( $res1  &&  $res2  && $res3  &&  $res4  &&  $res5){
            $this->json();
        }else{
            //这里 这么做 json  的 exception
            throw new \EZPHP\Exception\myException('保存失败');

        }



    }



    public function appAction()
    {
        $res=moduleModel::intance()->getOne(2);

        $this->render($res);

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

    public function appSaveAction()
    {
        $res=moduleModel::intance()->getOne(2);

        $this->render($res);

    }

    public function aboutAction(){



        $res=aboutModel::intance()->getAll();


//        var_dump(postModel::intance()->getSql());



        $this->render($res);
//        $this::cc();



//        include_once 'e.php';
//        throw new e(1000);
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