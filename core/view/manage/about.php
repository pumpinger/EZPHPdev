<?php


/**
 * $this @var \EZPHP\core\controller
 */


?>

<form class="form">

<?php foreach ($this->assign as $value): ?>


    <p><?php echo $value['name'] ?></p>

    <br>
    <script id="myEditor_<?php echo $value['id'] ?>" name="content_<?php echo $value['id'] ?>" type="text/plain" >
        <?php echo $value['content'] ?>
    </script>
    <br>
    <br>



    <?php if($value['field'] == 'content'):?>


        <script type="text/javascript">
            //    $(function(){
            window.um = UM.getEditor('myEditor_<?php echo $value['id'] ?>', {
                /* 传入配置参数,可配参数列表看umeditor.config.js */
                initialFrameWidth:'1000px'
            });
        </script>
    <?php else:?>
    <script type="text/javascript">
        //    $(function(){
        window.um = UM.getEditor('myEditor_<?php echo $value['id'] ?>', {
            /* 传入配置参数,可配参数列表看umeditor.config.js */
            initialFrameWidth:'600px',
            initialFrameHeight:'300px',
            toolbar:[
                'undo redo | bold italic underline | forecolor backcolor | removeformat |',
                'insertorderedlist insertunorderedlist | selectall  | fontfamily fontsize' ,
            ]
        });
    </script>

    <?php endif;?>








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