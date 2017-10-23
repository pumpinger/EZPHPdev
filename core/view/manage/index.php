<?php


/**
 * $this @var \EZPHP\core\controller
 */


?>

<form class="form">

<?php foreach ($this->assign as $value): ?>


    <p>课程：<?php echo $value['name'] ?></p>
    <script id="myEditor_<?php echo $value['id'] ?>" name="content_<?php echo $value['id'] ?>" type="text/plain" style="width:600px;height:200px;">
        <?php echo $value['content'] ?>
    </script>
    <br>

    <script type="text/javascript">
        //    $(function(){
        window.um = UM.getEditor('myEditor_<?php echo $value['id'] ?>', {
            /* 传入配置参数,可配参数列表看umeditor.config.js */
        });
    </script>

<?php endforeach; ?>

<span class="save">提交</span>
</form>


<script type="text/javascript">


    $('.save').click(function (){
        var data=$('.form').serialize();
//        var data=$('.form').serializeArray();



        $.ajax({
            type:'POST',
            dataType:'json',
            url:'<?php echo $this->makeUrl('manage','classSave')?>',
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