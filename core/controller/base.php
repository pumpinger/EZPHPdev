<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/6
 * Time: 16:25
 */

class baseController extends \EZPHP\core\controller{



    public function onRender()
    {

        $this->setLayout(APP_VIEW_PATH.'layout/home.php');
        $this->setTitle('羊爸爸-中医育儿');
    }

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }


    


}