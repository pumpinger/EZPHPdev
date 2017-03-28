<?php
/**
 * Created by PhpStorm.
 * User: @van
 * Date: 2015/7/13
 * Time: 10:27
 */

/**
 * @var $this indexController
 */
?>





<link href="<?php echo PUBLIC_PATH ;?>lib/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="<?php echo PUBLIC_PATH ;?>lib/umeditor/third-party/template.min.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_PATH ;?>lib/umeditor/umeditor.config.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_PATH ;?>lib/umeditor/umeditor.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_PATH ;?>lib/umeditor/lang/zh-cn/zh-cn.js"></script>


<form class="form">
    <input name="title" placeholder="输入标题">
    <input name="province" placeholder="输入省">
    <input name="city" placeholder="输入市">
    <input name="district" placeholder="输入区">
    <script id="myEditor" name="content" type="text/plain" style="width:600px;height:200px;"></script>
    <input name="tag" placeholder="输入标签">
</form>
    <span class="save">保存</span>




<script type="text/javascript">
//    $(function(){
    window.um = UM.getEditor('myEditor', {
        /* 传入配置参数,可配参数列表看umeditor.config.js */
    });
//    });


    $('.save').click(function (){
        var data=$('.form').serialize();
        var data=$('.form').serializeArray();

        $.ajax({
            type:'POST',
            dataType:'json',
            url:'<?php echo $this->makeUrl('post','save')?>',
            data:data,
            success:function (res){
                console.log(res);
            },
            error:function (){

            }
        });
    });
    
    
    
</script>





