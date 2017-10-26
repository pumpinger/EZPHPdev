<style>


    .top_select {color: #bcc774;}

    /*文本内容*/
    .text{width:100%;}
    .text_all{width:1000px;margin:0 auto;background-color:#ffffff;}
    .text_content1 h2,.text_content2 h2{color:#bcc774; font-size:20px;padding:40px 0 20px 40px;font-weight:600;}
    .text_content1 p{font-size:10px;color:#474443; line-height:30px; letter-spacing:0;font-weight:600;max-width:630px;word-wrap:break-word;margin-left:40px;}
    .text_content2 {margin: 60px 0 0 40px; border-top:1px solid #e4e4e4;width:635px;position:relative;padding-bottom:30px;}
    .text_content3 img {width:100px;margin: 0 0 60px 300px;}
    .text_content3{margin-top:60px;padding-bottom:30px;}
    .text_link{width:630px;height:40px;background-color:#bcc774;margin-left:40px;text-align:center;line-height:40px;margin-bottom:30px;}
    .text_link a{font-weight:800; color:#ffffff;}

</style>

<div class="top_topic">
    <div class="top_all">
        <div class="top_page">
            <a href="<?php echo $this->makeUrl('index','index')?>"><img src="<?php echo PUBLIC_PATH ;?>img/7.png"></a>
        </div>
        <div class="top_book">
            <ul>
                <li class="top_select"><p>羊爸爸中医育儿社区</p></li>
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
            <?php if(! $this->assign['comment']):?>
                <img src="<?php echo PUBLIC_PATH ;?>img/logo2.png">

            <?php endif;?>

            <div class="text_link">
                <a target="_blank" href="http://www.yang-baba.net/article/48">进入社区 &gt; &gt; </a>
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
