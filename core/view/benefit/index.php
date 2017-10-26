<style>


    .top_select {color: #a0d9f6;}


    /*文本内容*/
    .text{width:100%;}
    .text_all{width:1000px;margin:0 auto;background-color:#ffffff;}
    .text_content1 h2,.text_content2 h2{color:#a0d9f6; font-size:20px;padding:40px 0 20px 40px;font-weight:600;}
    .text_content1 p{font-size:10px;color:#474443; line-height:30px; letter-spacing:0;font-weight:600;max-width:630px;word-wrap:break-word;margin-left:40px;}
    .text_content2 {margin: 60px 0 0 40px; border-top:1px solid #e4e4e4;width:635px;position:relative;padding-bottom:30px;}
    .text_link{width:630px;height:40px;background-color:#a0d9f6;margin-left:40px;text-align:center;line-height:40px;}
    .text_link a{font-weight:800; color:#ffffff;}



</style>

<div class="top_topic">

    <div class="top_all">
        <div class="top_page">
            <a  href="<?php echo $this->makeUrl('index','index')?>"><img src="<?php echo PUBLIC_PATH ;?>img/7.png"></a>
        </div>
        <div class="top_book">
            <ul>
                <li class="top_select"><p>羊爸爸公益</p></li>
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

        <!---->
<!--        <div class="text_content1">-->
<!--            <h2>简介</h2>-->
<!--            <p>为贯彻党的十六大精神，实践“三个代表”重要思想，切实推进教育创新，深化教学改革，促进现代信息技术在教学中的应用，共享优质教学资源，进一步促进教授上讲台，全面提高教育教学质量，造就数以万计的专门人才和一大批拔尖创新人才，提升我们高等教育的综合实力和国际竞争能力，教育部决定在全国高校（包括高职高专院校）中启动高等学校教学质量与教学改革工程精品课程建设工作（以下简称精品课程建设）-->
<!--                <br>为贯彻党的十六大精神，实践“三个代表”重要思想，切实推进教育创新，深化教学改革，促进现代信息技术在教学中的应用，共享优质教学资源，进一步促进教授上讲台，全面提高教育教学质量，造就数以万计的专门人才和一大批拔尖创新人才，提升我们高等教育的综合实力和国际竞争能力，教育部决定在全国高校（包括高职高专院校）中启动高等学校教学质量与教学改革工程精品课程建设工作（以下简称精品课程建设）</p>-->
<!---->
<!--            <h2>松果计划</h2>-->
<!--            <p>为贯彻党的十六大精神，实践“三个代表”重要思想，切实推进教育创新，深化教学改革，促进现代信息技术在教学中的应用，共享优质教学资源，进一步促进教授上讲台，全面提高教育教学质量，造就数以万计的专门人才和一大批拔尖创新人才，提升我们高等教育的综合实力和国际竞争能力，教育部决定在全国高校（包括高职高专院校）中启动高等学校教学质量与教学改革工程精品课程建设工作（以下简称精品课程建设）-->
<!--                <br>为贯彻党的十六大精神，实践“三个代表”重要思想，切实推进教育创新，深化教学改革，促进现代信息技术在教学中的应用，共享优质教学资源，进一步促进教授上讲台，全面提高教育教学质量，造就数以万计的专门人才和一大批拔尖创新人才，提升我们高等教育的综合实力和国际竞争能力，教育部决定在全国高校（包括高职高专院校）中启动高等学校教学质量与教学改革工程精品课程建设工作（以下简称精品课程建设）</p>-->
<!---->
<!--            <h2>萝卜会</h2>-->
<!--            <p>为贯彻党的十六大精神，实践“三个代表”重要思想，切实推进教育创新，深化教学改革，促进现代信息技术在教学中的应用，共享优质教学资源，进一步促进教授上讲台，全面提高教育教学质量，造就数以万计的专门人才和一大批拔尖创新人才，提升我们高等教育的综合实力和国际竞争能力，教育部决定在全国高校（包括高职高专院校）中启动高等学校教学质量与教学改革工程精品课程建设工作（以下简称精品课程建设）-->
<!--                <br>为贯彻党的十六大精神，实践“三个代表”重要思想，切实推进教育创新，深化教学改革，促进现代信息技术在教学中的应用，共享优质教学资源，进一步促进教授上讲台，全面提高教育教学质量，造就数以万计的专门人才和一大批拔尖创新人才，提升我们高等教育的综合实力和国际竞争能力，教育部决定在全国高校（包括高职高专院校）中启动高等学校教学质量与教学改革工程精品课程建设工作（以下简称精品课程建设）</p>-->
<!--        </div>-->



<!--            <div class="text_eva">-->
<!--                <h3><strong>王大锤</strong>   <span>2017.06.15    成都</span></h3>-->
<!--                <div class="text_eva_border">-->
<!--                    <p>为贯彻党的十六大精神，实践“三个代表”重要思想，切实推进教育创新，深化教学改革,为贯彻党的十六大精神，实践“三个代表”重要思想，切实推进教育创新，深化教学改革</p>-->
<!--                </div>-->
<!--                <h3><strong>王大锤</strong>   <span>2017.06.15    成都</span></h3>-->
<!--                <div class="text_eva_border">-->
<!--                    <p>为贯彻党的十六大精神，实践“三个代表”重要思想，切实推进教育创新，深化教学改革,为贯彻党的十六大精神，实践“三个代表”重要思想，切实推进教育创新，深化教学改革</p>-->
<!--                </div>-->
<!--                <h3><strong>王大锤</strong>   <span>2017.06.15    成都</span></h3>-->
<!--                <div class="text_eva_border">-->
<!--                    <p>为贯彻党的十六大精神，实践“三个代表”重要思想，切实推进教育创新，深化教学改革,为贯彻党的十六大精神，实践“三个代表”重要思想，切实推进教育创新，深化教学改革</p>-->
<!--                </div>-->
<!--            </div>-->


        </div>
    </div>
</div>

