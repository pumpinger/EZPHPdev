<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Generator" content="EditPlus®">
    <meta name="Author" content="">
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <title><?php echo $this->title?></title>


    <link rel="stylesheet" href="<?php echo PUBLIC_PATH ;?>css/global.css"/>
    <script type="text/javascript" src="<?php echo PUBLIC_PATH ;?>lib/jquery-2.1.4.js"></script>


</head>

<body>
<?php include_once $this->view;?>





<div class="ending">
    <div class="ending_all">
        <div class="ending_left">
            <h3>羊爸爸</h3>
            <ul class="ending_list">
                <li><a href="<?php echo $this->makeUrl('about','index')?>#about_more">侵权举报</a></li>
                <li><a href="<?php echo $this->makeUrl('about','index')?>#about_more">对外合作</a></li>
                <li><a href="<?php echo $this->makeUrl('about','index')?>#about_more">反馈建议</a></li>
                <li><a href="<?php echo $this->makeUrl('about','index')?>">关于我们</a></li>
                <li><a href="<?php echo $this->makeUrl('about','index')?>#about_more">联系我们</a></li>
            </ul>
        </div>
        <div class="ending_mid">
            <p>友情链接</p>


            <?php //todo 这里的数据  怎么通过controller 传过来 ?>

            <?php

                $res = linkModel::intance()->getAll();

                foreach ($res as $v) {
                    echo '<a target="_blank" href="'.$v['link'].'">'.$v['name'].'</a>';
                }


            ?>

        </div>
        <div class="ending_bottom">
            <p>2013-2017羊爸爸  版权所有  蜀安网安备 11010802021451号 蜀ICP备16036548号-2</p>
        </div>
        <div class="ending_right">
            <div class="ending_border">

                <?php
                $res = settingModel::intance()->getOne(5);
                echo '<img src="'. $res['value'].'" />';
                ?>

            </div>
            <a><p style="margin-right:10px">关注我们</p>
                <p style="color:#ffc000">微信</p></a>
        </div>
    </div>
</div>

<div class="small_label">
    <img src="<?php echo PUBLIC_PATH ;?>img/label.png" >
    <div class="small_label_border">
        <?php
        $res = settingModel::intance()->getOne(1);
        echo '<img src="'. $res['value'].'" />';
        ?>
    </div>
</div>

<script>
    /*在线客服*/
    $(".small_label").hover(function(){
        $(".small_label_border").show();
    },function(){
        $(".small_label_border").hide();
    })
</script>
</body>
</html>



