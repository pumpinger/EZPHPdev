
<style>

    /* 顶部*/
    .topic_aside{background-color:#474443;min-width:1000px;padding:10px 0;}
    .topic_aside p{color:#EFB506;text-align:center;margin:0;font-size:12px;letter-spacing:1px;}
    .topic_content{background-color:#FFC000;min-width:1000px;position:relative;height:200px;}
    .topic_all{width:1000px;height:100%;margin:0 auto;position:relative;}
    .topic_lift p,.topic_right p{margin:75px 60px;font-size:20px;color:#5f5f5d;}
    .topic_lift{position:absolute;height:100%;left:0;}
    .topic_right{position:absolute;height:100%; right:0;}
    .topic_logo{height:100%;position:absolute;left:50%;}
    .topic_logo img{height:200px; margin-top:30px;}

    .matter,.column{position:relative;  width:100%;height:100%;}
    .matter_all{margin:0 auto;height:100%;width:1000px;background-color:#fefefe;}
    .matter_enounce_1,.matter_enounce_2{text-align:center;padding: 60px 0;}
    .matter_enounce_1 p,.matter_enounce_2 p{font-size:20px;color:#8b8b8c;}
    .matter_radius{background-color:#ffc000; width:140px; height:140px;float:left;margin-right:50px;border-radius:100px;color:#5f5f5d;}
    .matter_book{position:relative;height:150px;}
    .matter_radius {cursor: pointer;}
    .matter_radius h1{font-size:14px;margin-top:50px;text-align:center;font-weight:bold;}
    .matter_radius p{font-size:8px;text-align:center;margin-top:6px;color:#5f5f5d}
    .matter_radius strong{font-size:16px;}


    /*羊爸爸专栏*/
    .column_all{margin:0 auto;height:100%;width:1000px;}
    .column_community,.column_app,.column_commonweal{background-size: 100% 100%;width:1000px;height:200px;margin-top:20px;position:relative;cursor: pointer;}
    .column_community{background-color:#5f5f5d;}
    .column_app{background-color:#757475;}
    .column_commonweal{background-color:#757475;}
    .column_app h2{color:#ffc000}
    .column_community h2{color:#bcc774;}
    .column_commonweal h2{color:#fefefe;}
    .column_all h2 {float:left;margin:60px 30px 60px 40px;font-size:62px;font-weight:400;}
    .column_community p,.column_app p,.column_commonweal p{position:relative;color:#b6b6b7;}
    .column_all span{color:#b6b6b7;font-size:14px;letter-spacing:0.5px;}
    .column_all a{position:absolute; top:65px;right:30px;display:inline-block; }
    .column_all img {width:16px;height:24px;position:relative;top:5px;left:12px;}


</style>
<div class="topic_aside">
    <p>我们希望通过我们的努力，家长的学习，可以让更多的孩子远离错误喂养和错误治疗，自然健康的成长</p>
</div>
<div class="topic_content">
    <div class="topic_all">
        <div class="topic_lift">
            <p>国内第一家做中医育儿的团队。</p>
        </div>
        <div class="topic_logo">
            <img src="<?php echo PUBLIC_PATH ;?>img/logo1.png" >
        </div>
        <div class="topic_right">
            <p style="font-weight:bold;">羊爸爸/用生命引领生命</p>
        </div>
    </div>
</div>
<div class="matter">
    <div class="matter_all">
        <div class="matter_enounce_1">
            <p>我们坚信:所有家长都应该参加中国育儿基础教育。</p>
        </div>
        <ul class="matter_book">


            <?php foreach ($this->assign['nav'] as $v): ?>

                <?php if($v['id']  == 1 ):?>
                    <li class="matter_radius"  style="margin-left:50px;">
                <?php else:?>
                    <li class="matter_radius"  >
                <?php endif;?>


                    <h1><?php echo $v['name'] ?></h1>
                    <a href="<?php echo $this->makeUrl('class','index',array('active'=>$v['id']))?>"><p>查看详情 > </p></a>


                    <?php if($v['id']  == 1 || $v['id']  == 2):?>
                        <p>￥<strong><?php echo $v['price'] ?></strong>/视频</p>
                    <?php elseif($v['id']  == 3):;?>
                        <p>￥<strong><?php echo $v['price'] ?></strong>/年</p>
                    <?php elseif($v['id']  == 4):;?>
                        <p><strong>免费</strong></p>
                    <?php elseif($v['id']  == 5):;?>
                        <p>￥<strong><?php echo $v['price'] ?></strong>X3部分</p>
                    <?php endif; ?>

                </li>

            <?php endforeach; ?>

        </ul>
        <div class="matter_enounce_2">
            <p><strong>有效&简单</strong> 是羊爸爸中医育儿课程火爆的法宝。</p>
        </div>
    </div>
</div>
<div class="column">
    <div class="column_all">
        <div class="column_community" style="background-image:url(<?php echo $this->assign['pic'][0]['pic']?>)">
            <h2>羊爸爸社区</h2>
            <p style="top:70px;font-size:20px;">我们坚信自助互助你可以在这里寻求家长支持</p>
            <p style="top:90px;letter-spacing:0.5px;font-size:12px">羊爸爸中医育儿社区是一个温暖的的家长学习平台，这里有家长，有中医爱好者，也有医生。</p>
            <a href="<?php echo $this->makeUrl('community','index')?>"><span>点击进入</span><img src="<?php echo PUBLIC_PATH ;?>img/icon2.png" ></a>
        </div>
        <div class="column_app" style="background-image:url(<?php echo $this->assign['pic'][1]['pic']?>)">
            <h2>羊爸爸APP</h2>
            <p style="top:70px;font-size:20px;">缩短沟通距离，足不出门咨询靠谱中医</p>
            <p style="top:90px;letter-spacing:0.5px;font-size:12px">聚合了专业小儿中医，让繁忙的家长可以用简便的方式随时获得专业医生的帮助。</p>
            <a href="<?php echo $this->makeUrl('app','index')?>"><span>点击进入</span><img src="<?php echo PUBLIC_PATH ;?>img/icon3.png" ></a>
        </div>
        <div class="column_commonweal" style="background-image:url(<?php echo $this->assign['pic'][2]['pic']?>)">
            <h2>羊爸爸公益</h2>
            <p style="top:70px;font-size:20px;">松果计划/我们在路上</p>
            <p style="top:90px;letter-spacing:0.5px;font-size:12px">由羊爸爸，中医萝卜会，中医萝卜会成都分会共同发起，专注于中医育儿传播与推广的一项长期公益活动。</p>
            <a href="<?php echo $this->makeUrl('benefit','index')?>"><span>点击进入</span><img src="<?php echo PUBLIC_PATH ;?>img/icon2.png" ></a>
        </div>
    </div>
</div>


<script>
    $('.matter_radius').click(function () {
        var url  = $(this).find('a').prop('href');
        window.location.href = url;
    });

    $('.column_community,.column_app,.column_commonweal').click(function () {
        var url  = $(this).find('a').prop('href');
        window.location.href = url;
    });


</script>







