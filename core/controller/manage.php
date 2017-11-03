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
                'qr'=>$_REQUEST['qr'],
            ),$id
        );




        if( $res ){
            $this->json();
        }else{
            //todo 这里 这么做 json  的 exception  现在是 html
            throw new \EZPHP\Exception\myException('保存失败');

        }



    }





















    public function moduleAction()
    {


        $id = $_GET['id'];

        $res=moduleModel::intance()->getOne($id);

        $comment=module_commentModel::intance()->getModuleAll($id);

        $this->render(array(
            'id'=>$id,
            'data'=>$res,
            'comment'=>$comment,
        ));

    }


    public function moduleSaveAction()
    {

        $id = $_GET['id'];

        module_commentModel::intance()->delAll(array(
            'module_id'=>$id
        ));

        $res = true;
        if($_REQUEST['comment']){
            foreach ($_REQUEST['comment'] as  $k => $v) {


                if(!$v){
                    continue;
                }


                $res=module_commentModel::intance()->addOne(
                    array(
                        'content'=>$v,
                        'info'=>$_REQUEST['info'][$k],
                        'name'=>$_REQUEST['name'][$k],
                        'module_id'=>$id,
                    )
                );

                if( ! $res ){
                    break;
                }
            }
        }



        if($res){
            $res=moduleModel::intance()->chgOne(array(
                'pic'=>$_REQUEST['pic'],
                'content'=>$_REQUEST['content'],
            ),$id);
        }






        if($res){
            $this->json();

        }else{
            throw new \EZPHP\Exception\myException('保存失败');


        }


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



        $res = true;
        if($_REQUEST['qr']){
            foreach ($_REQUEST['qr'] as  $k => $v) {


                if(!$v){
                    continue;
                }


                $res=settingModel::intance()->chgOne(array(
                    'value'=>$v,
                ),$k);

                if( ! $res ){
                    break;
                }
            }

        }





        if ($res){
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