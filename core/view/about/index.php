<style>



    .text_sum{width:600px;height:200px;margin-top:40px;}
    .text_singel{float:left;width:300px; height:100px;color:#474443;line-height:40px;}
    .text_singel p{font-size:12px;font-weight:600; line-height:24px;}
    .text_content2 { padding-bottom:360px;}






    .text_content1 h2,.text_content2 h2{color:#474443; font-size:20px;padding:40px 0 20px 40px;font-weight:600;}
    .text_content1 p{font-size:10px;color:#474443; line-height:30px; letter-spacing:0;font-weight:600;max-width:630px;word-wrap:break-word;margin-left:40px;}




</style>

<div class="top_topic">

    <div class="top_all">
        <div class="top_page">
            <a  href="<?php echo $this->makeUrl('index','index')?>"><img src="<?php echo PUBLIC_PATH ;?>img/7.png"></a>
        </div>
        <div class="top_book">
            <ul>
                <li class="top_select"><p>关于我们</p></li>
            </ul>
        </div>

        <div class="top_logo">

            <img src="<?php echo PUBLIC_PATH ;?>img/logo1.png">
        </div>
    </div>
</div>
<div class="text">
    <div class="text_all">

        <?php echo $this->assign['content']; ?>
<!--        <div class="text_content1">-->
<!--            <h2>简介</h2>-->
<!--            <p>为贯彻党的十六大精神，实践“三个代表”重要思想，切实推进教育创新，深化教学改革，促进现代信息技术在教学中的应用，共享优质教学资源，进一步促进教授上讲台，全面提高教育教学质量，造就数以万计的专门人才和一大批拔尖创新人才，提升我们高等教育的综合实力和国际竞争能力，教育部决定在全国高校（包括高职高专院校）中启动高等学校教学质量与教学改革工程精品课程建设工作（以下简称精品课程建设）-->
<!--                <br>为贯彻党的十六大精神，实践“三个代表”重要思想，切实推进教育创新，深化教学改革，促进现代信息技术在教学中的应用，共享优质教学资源，进一步促进教授上讲台，全面提高教育教学质量，造就数以万计的专门人才和一大批拔尖创新人才，提升我们高等教育的综合实力和国际竞争能力，教育部决定在全国高校（包括高职高专院校）中启动高等学校教学质量与教学改革工程精品课程建设工作（以下简称精品课程建设）</p>-->
<!---->
<!--            <h2>团队介绍</h2>-->
<!--            <p>为贯彻党的十六大精神，实践“三个代表”重要思想，切实推进教育创新，深化教学改革，促进现代信息技术在教学中的应用，共享优质教学资源，进一步促进教授上讲台，全面提高教育教学质量，造就数以万计的专门人才和一大批拔尖创新人才，提升我们高等教育的综合实力和国际竞争能力，教育部决定在全国高校（包括高职高专院校）中启动高等学校教学质量与教学改革工程精品课程建设工作（以下简称精品课程建设）-->
<!--                <br>为贯彻党的十六大精神，实践“三个代表”重要思想，切实推进教育创新，深化教学改革，促进现代信息技术在教学中的应用，共享优质教学资源，进一步促进教授上讲台，全面提高教育教学质量，造就数以万计的专门人才和一大批拔尖创新人才，提升我们高等教育的综合实力和国际竞争能力，教育部决定在全国高校（包括高职高专院校）中启动高等学校教学质量与教学改革工程精品课程建设工作（以下简称精品课程建设）</p>-->
<!--        </div>-->

        <div class="text_content2" id="about_more">
            <div class="text_sum">
                <div class="text_singel">
                    <h3>对外合作</h3>
                    <?php echo $this->assign['cooperation']; ?>
                </div>
                <div class="text_singel">
                    <h3>反馈建议</h3>
                    <?php echo $this->assign['feedback']; ?>
                </div>
                <div class="text_singel">
                    <h3>侵权举报</h3>
                    <?php echo $this->assign['report']; ?>
                </div>
                <div class="text_singel">
                    <h3>联系我们</h3>
                    <?php echo $this->assign['contact']; ?>
                </div>
            </div>
            <div class="text_pic">
                <img src="<?php echo PUBLIC_PATH ;?>img/logo2.png">
            </div>

        </div>
    </div>
</div>
