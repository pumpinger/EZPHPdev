<?php


/**
 * $this @var \EZPHP\core\controller
 */


?>

<form class="form">




    <p>正文</p>

    <br>
    <script id="myEditor" name="content" type="text/plain" style="width:600px;height:200px;">
    <?php echo $this->assign['content'] ?>
</script>
    <br>


    <script type="text/javascript">
        //    $(function(){
        window.um = UM.getEditor('myEditor', {
            /* 传入配置参数,可配参数列表看umeditor.config.js */
            initialFrameWidth:'1000px'
        });
    </script>


    <p>图片</p>



    <p>评论</p>






    <span class="save">提交</span>
</form>


<script type="text/javascript">


    $('.save').click(function (){
        var data=$('.form').serialize();
//        var data=$('.form').serializeArray();



        $.ajax({
            type:'POST',
            dataType:'json',
            url:'<?php echo $this->makeUrl('manage','appSave')?>',
            data:data,
            success:function (res){
                if(res.ok){
                    alert('保存成功!');
                }else{
                    alert('保存失败!');
                }
            },
            error:function (){
                alert('保存失败!');
            }
        });
    });



</script>