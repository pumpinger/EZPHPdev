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

    <script type="text/javascript" src="<?php echo PUBLIC_PATH ;?>lib/jquery-2.1.4.js"></script>
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH ;?>lib/iconfont/iconfont.css"/>
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH ;?>css/xstarp.css"/>
    <script type="text/javascript" src="<?php echo PUBLIC_PATH ;?>js/xstarp.js"></script>

    <style>
        .top {background-color: #444;color: #fff;}

    </style>
</head>
<body>

<div class="top">
    <div class="top_nav">
        <a>首页</a>
        <a>个人中心</a>
    </div>
    <div class="top_fun">
        <a>退出</a>
        <a>注册</a>
    </div>

</div>


<?php include_once $this->view;?>



</body>


</html>

