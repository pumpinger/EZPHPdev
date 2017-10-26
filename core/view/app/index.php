<style>

    .top_select {color: #ffc000;}

    /*文本内容*/
    .text{width:100%;}
    .text_all{width:1000px;margin:0 auto;background-color:#ffffff;}
    .text_content1 h2,.text_content2 h2{color:#ffc000; font-size:20px;padding:40px 0 20px 40px;font-weight:600;}
    .text_content1 p{font-size:10px;color:#474443; line-height:30px; letter-spacing:0;font-weight:600;max-width:630px;word-wrap:break-word;margin-left:40px;}
    .text_content2 {margin: 60px 0 0 40px; border-top:1px solid #e4e4e4;width:635px;position:relative;padding-bottom:30px;}
    .text_content3{margin-top:60px;}
    .text_content3 .text_link{cursor: pointer;}
    .text_link{width:630px;height:40px;background-color:#ffc000;margin-left:40px;text-align:center;line-height:40px;}
    .text_link a{font-weight:800; color:#ffffff;}


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

        <?php echo $this->assign['data']['content']; ?>


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
                        <h3><strong><?php echo $v['name'] ?></strong>   <span><?php echo $v['info'] ?></span></h3>
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
