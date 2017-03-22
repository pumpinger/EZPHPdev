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




<?php var_dump($this->assign) ?>

<div id="box">
    <?php foreach ($this->assign as $v): ?>

        <p>
            <?php echo  nl2p($v['text']);?>
        </p>
        <br>


    <?php endforeach; ?>

</div>


<script id="myEditor" name="content" type="text/plain" style="width:600px;height:200px;">
    这里写你的初始化内容
</script>


<script type="text/javascript">
    $(function(){
        window.um = UM.getEditor('myEditor', {
            /* 传入配置参数,可配参数列表看umeditor.config.js */
            toolbar: ['undo redo | bold italic underline']
        });
    });
</script>





