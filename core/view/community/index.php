<style>


    .top_select {color: #bcc774;}
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

        <div class="text_content1">
            <?php echo $this->assign['data']['content']; ?>
        </div>




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
