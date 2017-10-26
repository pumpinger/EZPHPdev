
<style>







</style>

<div class="top_topic">

    <div class="top_all">
        <div class="top_page">
            <a href="<?php echo $this->makeUrl('index','index')?>"><img src="<?php echo PUBLIC_PATH ;?>img/7.png" ></a>
        </div>
        <div class="top_book">
            <ul>
                <?php foreach ($this->assign['nav'] as $v): ?>
                    <li class="top_select <?php echo $this->assign['active']==$v['id']?'top_select_active':''; ?>">
                        <a href="<?php echo $this->makeUrl('class','index',array('active'=>$v['id']))?>"><p><?php echo $v['name'] ?></p></a>
                        <img class="top_point" src="<?php echo PUBLIC_PATH ;?>img/icon4.png">
                    </li>

                <?php endforeach; ?>

            </ul>
        </div>
        <div class="top_introduction">
            <p>羊爸爸，用生命引领生命</p>
        </div>
        <div class="top_logo">

            <img src="<?php echo PUBLIC_PATH ;?>img/logo1.png" >
        </div>
    </div>
</div>
<div class="text">
    <div class="text_all">

        <div class="text_content1">
            <?php echo $this->assign['data']['content']; ?>
        </div>


<!--        <div class="text_content1">-->
<!--            <h2>课程简介</h2>-->
<!--            <p>为贯彻党的十六大精神，实践“三个代表”重要思想，切实推进教育创新，深化教学改革，促进现代信息技术在教学中的应用，共享优质教学资源，进一步促进教授上讲台，全面提高教育教学质量，造就数以万计的专门人才和一大批拔尖创新人才，提升我们高等教育的综合实力和国际竞争能力，教育部决定在全国高校（包括高职高专院校）中启动高等学校教学质量与教学改革工程精品课程建设工作（以下简称精品课程建设）-->
<!--                <br>为贯彻党的十六大精神，实践“三个代表”重要思想，切实推进教育创新，深化教学改革，促进现代信息技术在教学中的应用，共享优质教学资源，进一步促进教授上讲台，全面提高教育教学质量，造就数以万计的专门人才和一大批拔尖创新人才，提升我们高等教育的综合实力和国际竞争能力，教育部决定在全国高校（包括高职高专院校）中启动高等学校教学质量与教学改革工程精品课程建设工作（以下简称精品课程建设）</p>-->
<!---->
<!--            <h2>课程反馈</h2>-->
<!--            <p>为贯彻党的十六大精神，实践“三个代表”重要思想，切实推进教育创新，深化教学改革，促进现代信息技术在教学中的应用，共享优质教学资源，进一步促进教授上讲台，全面提高教育教学质量，造就数以万计的专门人才和一大批拔尖创新人才，提升我们高等教育的综合实力和国际竞争能力，教育部决定在全国高校（包括高职高专院校）中启动高等学校教学质量与教学改革工程精品课程建设工作（以下简称精品课程建设）-->
<!--                <br>为贯彻党的十六大精神，实践“三个代表”重要思想，切实推进教育创新，深化教学改革，促进现代信息技术在教学中的应用，共享优质教学资源，进一步促进教授上讲台，全面提高教育教学质量，造就数以万计的专门人才和一大批拔尖创新人才，提升我们高等教育的综合实力和国际竞争能力，教育部决定在全国高校（包括高职高专院校）中启动高等学校教学质量与教学改革工程精品课程建设工作（以下简称精品课程建设）</p>-->
<!--        </div>-->
<!--        <div class="text_content1">-->
<!--            <p>为贯彻党的十六大精神，实践“三个代表”重要思想，切实推进教育创新，深化教学改革，促进现代信息技术在教学中的应用，共享优质教学资源，进一步促进教授上讲台，全面提高教育教学质量，造就数以万计的专门人才和一大批拔尖创新人才，提升我们高等教育的综合实力和国际竞争能力，教育部决定在全国高校（包括高职高专院校）中启动高等学校教学质量与教学改革工程精品课程建设工作（以下简称精品课程建设）-->
<!--        </div>-->
<!--        <div class="text_content1">-->
<!--            <p>为贯彻党的十六大精神，实践“三个代表”重要思想，切实推进教育创新，深化教学改革，促进现代信息技术在教学中的应用，共享优质教学资源，进一步促进教授上讲台，全面提高教育教学质量，造就数以万计的专门人才和一大批拔尖创新人才，提升我们高等教育的综合实力和国际竞争能力，教育部决定在全国高校（包括高职高专院校）中启动高等学校教学质量与教学改革工程精品课程建设工作（以下简称精品课程建设）-->
<!--        </div>-->
<!--        <div class="text_content1">-->
<!--            <p>为贯彻党的十六大精神，实践“三个代表”重要思想，切实推进教育创新，深化教学改革，促进现代信息技术在教学中的应用，共享优质教学资源，进一步促进教授上讲台，全面提高教育教学质量，造就数以万计的专门人才和一大批拔尖创新人才，提升我们高等教育的综合实力和国际竞争能力，教育部决定在全国高校（包括高职高专院校）中启动高等学校教学质量与教学改革工程精品课程建设工作（以下简称精品课程建设）-->
<!--        </div>-->
<!--        <div class="text_content1">-->
<!--            <p>为贯彻党的十六大精神，实践“三个代表”重要思想，切实推进教育创新，深化教学改革，促进现代信息技术在教学中的应用，共享优质教学资源，进一步促进教授上讲台，全面提高教育教学质量，造就数以万计的专门人才和一大批拔尖创新人才，提升我们高等教育的综合实力和国际竞争能力，教育部决定在全国高校（包括高职高专院校）中启动高等学校教学质量与教学改革工程精品课程建设工作（以下简称精品课程建设）-->
<!--        </div>-->


        <div class="text_content4">
            <h2 style="padding-left:0;">报名链接</h2>

            <?php
            $res = settingModel::intance()->getOne(1);
            echo '<img src="'. $res['value'].'" />';
            ?>
        </div>
        <div class="text_content3">
            <img src="<?php echo PUBLIC_PATH ;?>img/logo2.png" >
        </div>

    </div>
</div>


<script>
    /*书籍切换*/

    $(".top_select").click(function(){
        var x=$(this).index();
        $(".top_select").removeClass("top_select_active");
        $(".top_select").eq(x).addClass("top_select_active");
        $(".top_point").hide();
        $(".top_point").eq(x).show();
//        $(".text_content1").hide();
        $(".text_content1").eq(x).show();
    })

</script>