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


    <link rel="stylesheet" href="<?php echo PUBLIC_PATH ;?>lib/iconfont/iconfont.css"/>
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH ;?>css/xstarp.css"/>
    <script type="text/javascript" src="<?php echo PUBLIC_PATH ;?>js/xstarp.js"></script>



    <link href="<?php echo PUBLIC_PATH ;?>lib/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo PUBLIC_PATH ;?>lib/umeditor/third-party/template.min.js"></script>
    <script type="text/javascript" src="<?php echo PUBLIC_PATH ;?>lib/umeditor/umeditor.config.js"></script>
    <script type="text/javascript" src="<?php echo PUBLIC_PATH ;?>lib/umeditor/umeditor.js"></script>
    <script type="text/javascript" src="<?php echo PUBLIC_PATH ;?>lib/umeditor/lang/zh-cn/zh-cn.js"></script>




    <style>
        body {font-family: "Microsoft YaHei", 'Open Sans', sans-serif;background: #eee9c9;}


        .top {background-color: #555;color: #fff;height: 50px;border-bottom: 10px solid #777f89;}

        .top_log {display: inline-block;vertical-align:top;margin-top: 8px;margin-left: 10px;}
        .top_nav {display: inline-block;vertical-align:top;margin: 22px 0 0 40px;}
        .top_fun {display: inline-block;vertical-align:top;float: right;margin-right: 20px;margin-top: 20px;}
        .top_nav a {float: left;margin-right: 20px;cursor: pointer;}


        .main {padding: 20px;}

        .save {background: #9cb945;border: 1px solid #bcc774;padding: 5px 10px;cursor: pointer;color: #ffffff;}
    </style>
</head>
<body>

<div class="top">
    <div class="top_log x-font-30">
        <a href="<?php echo $this->makeUrl('index','index')?>">羊爸爸</a>
    </div>
    <div class="top_nav x-font-16">
        <a href="<?php echo $this->makeUrl('manage','community')?>">羊爸爸社区(图案，文章，评论)</a>
        <a href="<?php echo $this->makeUrl('manage','app')?>">羊爸爸APP</a>
        <a href="<?php echo $this->makeUrl('manage','beneift')?>">羊爸爸公益</a>
        <a href="<?php echo $this->makeUrl('manage','index')?>">课程管理</a>
        <a href="<?php echo $this->makeUrl('manage','about')?>">关于我们（多个板块）</a>
        <a href="<?php echo $this->makeUrl('manage','setting')?>">设置(二维码，友链)</a>
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
