<?php


/**
 * $this @var \EZPHP\core\controller
 */





?>

<style>

    .link {margin-bottom: 20px;}



    #filePicker {display: inline-block;vertical-align: top;margin-bottom: 20px;}
    #fileList {display: inline-block;vertical-align: top;}

    .file-item {margin-left: 10px;display: inline-block;}

    .info {white-space: nowrap;text-overflow: ellipsis;width: 100px;overflow: hidden;}
    .progress {width: 100px;height: 16px;border: 1px solid #00b7ee;}
    .progress span {height: 100%;background-color: #00a2d4;display: inline-block;}
</style>




<form class="form">


    <p>二维码:</p>
    <br>


    <div id="uploader-demo">
        <!--用来存放item-->
        <div id="filePicker">选择图片</div>
        <div id="fileList" class="uploader-list"></div>
        <input id="fileInput" type="hidden" name="qr">
    </div>




    <p>安卓二维码:</p>
    <br>




    <p>苹果二维码:</p>
    <br>







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


    // 初始化Web Uploader
    var uploader = WebUploader.create({

        // 选完文件后，是否自动上传。
        auto: true,
        // swf文件路径
        swf: '/js/Uploader.swf',
        // 文件接收服务端。
        server: './index.php?c=upload',

        // 选择文件的按钮。可选。
        // 内部根据当前运行是创建，可能是input元素，也可能是flash.
        pick: {
            id:'#filePicker',
            multiple:false
        },

        // 只允许选择图片文件。
        accept: {
            title: 'Images',
            extensions: 'gif,jpg,jpeg,bmp,png',
            mimeTypes: 'image/*'
        }
    });
    uploader.on( 'fileQueued', function( file ) {
        var $li = $(
                '<div id="' + file.id + '" class="file-item thumbnail">' +
                '<img>' +
                '</div>'
            ),
            $img = $li.find('img');


        // $list为容器jQuery实例
        $('#fileList').append( $li );

        // 创建缩略图
        // 如果为非图片文件，可以不用调用此方法。
        // thumbnailWidth x thumbnailHeight 为 100 x 100
        uploader.makeThumb( file, function( error, src ) {
            if ( error ) {
                $img.replaceWith('<span>不能预览</span>');
                return;
            }

            $img.attr( 'src', src );
        }, 100, 100 );
    });
    // 文件上传过程中创建进度条实时显示。
    uploader.on( 'uploadProgress', function( file, percentage ) {
        var $li = $( '#'+file.id ),
            $percent = $li.find('.progress span');

        // 避免重复创建
        if ( !$percent.length ) {
            $percent = $('<p class="progress"><span></span></p>')
                .appendTo( $li )
                .find('span');
        }

        $percent.css( 'width', percentage * 100 + '%' );
    });

    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
    uploader.on( 'uploadSuccess', function( file ) {
        $( '#'+file.id ).addClass('upload-state-done');
    });

    // 文件上传失败，显示上传出错。
    uploader.on( 'uploadError', function( file ) {
        var $li = $( '#'+file.id ),
            $error = $li.find('div.error');

        // 避免重复创建
        if ( !$error.length ) {
            $error = $('<div class="error"></div>').appendTo( $li );
        }

        $error.text('上传失败');
    });

    // 完成上传完了，成功或者失败，先删除进度条。
    uploader.on( 'uploadComplete', function( file ) {
        var $li = $( '#'+file.id );
        $( '#'+file.id ).find('.progress').remove();
        $('<div class="info">'+file.name+'</div>')
            .appendTo( $li );
    });









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