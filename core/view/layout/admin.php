<?php
/**
 * Created by PhpStorm.
 * User: @van
 * Date: 2015/7/13
 * Time: 10:27
 */

/**
 * @var $this \EZPHP\core\controller
 */
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title><?php echo $this->title?></title>
    <link rel="shortcut icon" href="<?php echo WEB_PATH ;?>favicon.ico" />

    <script type="text/javascript" src="<?php echo PUBLIC_PATH ;?>lib/jquery-2.1.4.js"></script>


<!--    <link rel="stylesheet" href="--><?php //echo PUBLIC_PATH ;?><!--lib/iconfont/iconfont.css"/>-->
<!--    <link rel="stylesheet" href="--><?php //echo PUBLIC_PATH ;?><!--css/xstarp.css"/>-->
<!--    <script type="text/javascript" src="--><?php //echo PUBLIC_PATH ;?><!--js/xstarp.js"></script>-->



    <link href="<?php echo PUBLIC_PATH ;?>lib/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo PUBLIC_PATH ;?>lib/umeditor/third-party/template.min.js"></script>
    <script type="text/javascript" src="<?php echo PUBLIC_PATH ;?>lib/umeditor/umeditor.config.js"></script>
    <script type="text/javascript" src="<?php echo PUBLIC_PATH ;?>lib/umeditor/umeditor.js"></script>
    <script type="text/javascript" src="<?php echo PUBLIC_PATH ;?>lib/umeditor/lang/zh-cn/zh-cn.js"></script>


    <link href="<?php echo PUBLIC_PATH ;?>lib/webuploader/webuploader.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo PUBLIC_PATH ;?>lib/webuploader/webuploader.html5only.min.js"></script>





    <style>

        body, dl, dd, h1, h2, h3, h4, h5, h6, p, form,a,button{margin:0;padding:0;}
        ol,li,ul{margin:0; padding:0;list-style: outside none none;}
        p,div {word-wrap:break-word;}
        a{text-decoration:none;color: inherit;}
        img{border: 0;}
        table{border-collapse:collapse;border-spacing:0;}
        label {cursor:pointer;}
        input, button, textarea, select {font-size: inherit;width: auto;padding:0;}
        ol, ul { list-style: none; }



        body {font-family: "Microsoft YaHei", 'Open Sans', sans-serif;background: #eee9c9;}


        .main {width: 1000px;margin: 0 auto;}
        .top {background-color: #555;color: #fff;height: 50px;border-bottom: 10px solid #777f89;}

        .top_log {display: inline-block;vertical-align:top;margin-top: 8px;margin-left: 10px;font-size: 30px;}
        .top_nav {display : inline-block;vertical-align:top;margin: 22px 0 0 40px;font-size: 16px;}
        .top_fun {display: inline-block;vertical-align:top;float: right;margin-right: 20px;margin-top: 20px;font-size: 14px;}
        .top_nav a {float: left;margin-right: 20px;cursor: pointer;}
        .top_nav .active {color: #eee9c9;}


        .main {padding: 20px;}

        .save {background: #bcc774;border: 1px solid #9cb945;padding: 4px 10px;cursor: pointer;color: #ffffff;}
        .button {background: #5c9dff;border: 1px solid #4a77d4;padding: 4px 10px;cursor: pointer;color: #ffffff;}

        input  {line-height: 30px;height:32px;border-radius: 5px;border: 1px solid #5f5f5d;}
    </style>
</head>
<body>


<div class="top"  style="display: none;">
    <div class="top_log x-font-30">
        <a href="<?php echo $this->makeUrl('index','index')?>"  class="<?php echo $this->action=='index'?'active':'';?>">羊爸爸</a>
    </div>
    <div class="top_nav x-font-16">
        <a href="<?php echo $this->makeUrl('manage','community')?>"   class="<?php echo $this->action=='community'?'active':'';?>">羊爸爸社区</a>
        <a href="<?php echo $this->makeUrl('manage','app')?>"   class="<?php echo $this->action=='app'?'active':'';?>">羊爸爸APP</a>
        <a href="<?php echo $this->makeUrl('manage','benefit')?>"   class="<?php echo $this->action=='benefit'?'active':'';?>">羊爸爸公益</a>


        <?php
            $res=classModel::intance()->getAll(array('id','name'));

            foreach ($res as $v) {
                echo "<a href=".$this->makeUrl('manage','class',array('id'=>$v['id']))." class=".($v['id']==$_GET['id']?'active':'').">".$v['name']."</a>";
            }

        ?>
        <a href="<?php echo $this->makeUrl('manage','about')?>"   class="<?php echo $this->action=='about'?'active':'';?>">关于我们</a>
        <a href="<?php echo $this->makeUrl('manage','setting')?>"   class="<?php echo $this->action=='setting'?'active':'';?>">设置</a>
    </div>
    <div class="top_fun x-font-14">
        <?php if( $_SESSION):?>
            <a><?php echo $_SESSION['name']?></a>
            <a href="<?php echo $this->makeUrl('login','logout')?>">退出</a>
        <?php else:?>
            <a>登陆</a>
        <?php endif;?>

    </div>

</div>


<div class="main">
<?php include_once $this->view;?>
</div>


</body>


</html>

