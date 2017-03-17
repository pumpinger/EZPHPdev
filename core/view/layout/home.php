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

    <style>
        body {font-family: "Microsoft YaHei", 'Open Sans', sans-serif;background: #eee9c9;}


        .top {background-color: #555;color: #fff;height: 50px;border-bottom: 10px solid #777f89;}

        .top_log {display: inline-block;vertical-align:top;margin-top: 10px;margin-left: 10px;}
        .top_nav {display: inline-block;vertical-align:top;margin: 22px 0 0 40px;}
        .top_fun {display: inline-block;vertical-align:top;float: right;margin-right: 20px;margin-top: 20px;}
        .top_nav a {float: left;margin-right: 20px;cursor: pointer;}
    </style>
</head>
<body>

<div class="top">
    <div class="top_log x-font-30">
        Logo
    </div>
    <div class="top_nav x-font-16">
        <a>Home</a>
        <a>New</a>
        <a>Me</a>
    </div>
    <div class="top_fun x-font-14">
        <?php if( $_SESSION):?>
            <a><?php echo $_SESSION['name']?></a>
            <a data-href="<?php echo $this->makeUrl('login','logout')?>">exit</a>
        <?php else:?>
            <a>login</a>
            <a>logup</a>
        <?php endif;?>

    </div>

</div>


<?php include_once $this->view;?>



</body>


</html>

