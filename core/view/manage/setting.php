<?php


/**
 * $this @var \EZPHP\core\controller
 */





?>

<style>

    .link {margin-bottom: 20px;}
</style>




<form class="form">


    <p>二维码:</p>



    <p>安卓二维码:</p>



    <p>苹果二维码:</p>






    <p>友情链接</p>

    <br>
    <span class="button  link_add">新增</span>
    <br>
    <br>
    <div class="links">
        <?php foreach ($this->assign['link'] as $value): ?>


            <div class="link">
                网站名：<input type="text" name="name[]" placeholder="" value="<?php echo $value['name'] ?>"/>
                地址：<input type="text" name="link[]" placeholder="http://xxx.xx" value="<?php echo $value['link'] ?>"/>
                <span  class="button link_del">删除</span>
            </div>

        <?php endforeach; ?>
    </div>



    <span class="save">提交</span>
</form>


<script type="text/javascript">

    $('.link_add').click(function (){

        var tmp ='<div class="link">'+
            '网站名：<input type="text" name="name[]" placeholder=""/> '+
            '地址：<input type="text" name="link[]" placeholder="http://xxx.xx" /> '+
            '<span  class="button link_del">删除</span> '+
            '</div>';

        $('.links').append(tmp);
    });


    $('body').on('click','.link_del',function (){
        $(this).parent('.link').remove();

    });

    $('.save').click(function (){
        var data=$('.form').serialize();

        console.log(data);
//        var data=$('.form').serializeArray();



        $.ajax({
            type:'POST',
            dataType:'json',
            url:'<?php echo $this->makeUrl('manage','settingSave')?>',
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