<?php


/**
 * $this @var \EZPHP\core\controller
 */


?>

<form class="form">



        <p><?php echo $this->assign['name'] ?></p>

        <br>
        <script id="myEditor_<?php echo $value['id'] ?>" name="content_<?php echo $value['id'] ?>" type="text/plain" style="width:600px;height:200px;">
        <?php echo $value['content'] ?>
    </script>
        <br>
        <br>





        <script type="text/javascript">
            //    $(function(){
            window.um = UM.getEditor('myEditor_<?php echo $value['id'] ?>', {
                /* 传入配置参数,可配参数列表看umeditor.config.js */
                initialFrameWidth:'1000px'
            });
        </script>






    <span class="save">提交</span>
</form>


<script type="text/javascript">


    $('.save').click(function (){
        var data=$('.form').serialize();
//        var data=$('.form').serializeArray();



        $.ajax({
            type:'POST',
            dataType:'json',
            url:'<?php echo $this->makeUrl('manage','aboutSave')?>',
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