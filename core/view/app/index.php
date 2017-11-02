<style>

    .top_select {color: #ffc000;}
    .text_link{width:770px;height:40px;background-color:#ffc000;margin-left:40px;text-align:center;line-height:40px;cursor: pointer;}
    .text_link a{font-weight:800; color:#ffffff;}
    .text_content2 {margin-top: 30px;}






</style>

<div class="top_topic">

    <div class="top_all">
        <div class="top_page">
            <a  href="<?php echo $this->makeUrl('index','index')?>"><img src="<?php echo PUBLIC_PATH ;?>img/7.png"></a>
        </div>
        <div class="top_book">
            <ul>
                <li class="top_select"><p>羊爸爸APP</p></li>
            </ul>
        </div>
        <div class="top_introduction">
            <p>羊爸爸，用生命引领生命</p>
        </div>
        <div class="top_logo">

            <img src="<?php echo PUBLIC_PATH ;?>img/logo1.png">
        </div>
    </div>
</div>
<div class="text">
    <div class="text_all">


        <div class="text_content1">

            <?php echo $this->assign['data']['content']; ?>
        </div>



        <div class="text_content3">
            <div class="text_link">
                <a >进入下载页面 > > </a>
            </div>
        </div>


        <?php if($this->assign['comment']):?>
            <div class="text_content2">
                <h2 style="padding-left:0;">评价</h2>

                <div class="text_eva">

                    <?php foreach ($this->assign['comment'] as $v): ?>
                        <h3><?php echo $v['name'] ?>   <span><?php echo $v['info'] ?></span></h3>
                        <div class="text_eva_border">
                            <p><?php echo $v['content'] ?></p>
                        </div>
                    <?php endforeach; ?>


                </div>
                <div class="text_pic">
                    <img src="<?php echo PUBLIC_PATH ;?>img/logo2.png">
                </div>
            </div>
        <?php endif;?>

    </div>
</div>

<div class="mask"></div>
<div class="dialog">
    <a>X</a>
    <div class="dialog_div">
        安卓：

        <?php
        $res = settingModel::intance()->getOne(2);
        echo '<img src="'. $res['value'].'" />';
        ?>
    </div>
    <div class="dialog_div">
        苹果：

        <?php
        $res = settingModel::intance()->getOne(3);
        echo '<img src="'. $res['value'].'" />';
        ?>
    </div>


</div>


<script>
    $('.text_content3 .text_link').click(function (){
        $('.mask').show();
        $('.dialog').show();
        $("body").addClass('ban');
        
        $('.mask').click(function (){
            $('.mask').hide();
            $('.dialog').hide();
            $("body").removeClass('ban');
        })
    });

    $('.dialog a').click(function (){
        $('.mask').hide();
        $('.dialog').hide();
        $("body").removeClass('ban');
    });
</script>
