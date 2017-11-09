<?php


/**
 * $this @var \EZPHP\core\controller
 */


?>

<form class="form">



    <p>课程：</p>
    <input name="name" placeholder="课程名" value="<?php echo $this->assign['name'] ?>">
    <br>
    <br>

    <?php if(  $this->assign['id']  !=  4):?>
        <p>价格:</p>
        <input name="price" placeholder="课程价格" value="<?php echo $this->assign['price'] ?>">
        <br>
        <br>
    <?php endif;?>


    <p>正文:</p>
    <script id="myEditor" name="content" type="text/plain">
        <?php echo  $this->assign['content'] ?>
    </script>
    <br>
    <br>

    <span class="save">提交</span>
</form>


<script type="text/javascript">
    window.um = UE.getEditor('myEditor', {
        /* 传入配置参数,可配参数列表看umeditor.config.js */
        initialFrameWidth:'1000px'
    });

    $('.save').click(function (){
        var data=$('.form').serialize();
//        var data=$('.form').serializeArray();



        $.ajax({
            type:'POST',
            dataType:'json',
            url:'<?php echo $this->makeUrl('manage','classSave',array('id'=>$this->assign['id']))?>',
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