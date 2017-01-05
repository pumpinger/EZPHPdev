<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台登陆</title>
    <script type="text/javascript" src="<?php echo PUBLIC_PATH.'/lib/jquery-2.1.4.js'?>"></script>
    <style>

        body{
            width: 100%;
            height: 100%;
            margin: 0;
            font-family: "Microsoft YaHei",'Open Sans',sans-serif;
            background-color: #4A374A;
        }
        #login{
            position: absolute;
            top: 50%;
            left:50%;
            margin: -150px 0 0 -150px;
            width: 300px;
            height: 300px;
        }
        #login h1{
            color: #fff;
            text-shadow:0 0 10px;
            letter-spacing: 1px;
            text-align: center;
        }
        h1{
            font-size: 2em;
            margin: 0.67em 0;
        }
        input{
            width: 278px;
            height: 18px;
            margin-bottom: 10px;
            outline: none;
            padding: 10px;
            font-size: 13px;
            color: #fff;
            text-shadow:1px 1px 1px;
            border: 1px solid #312E3D;
            border-bottom: 1px solid #56536A;
            border-radius: 4px;
            background-color: #2D2D3F;
        }
        .but{
            width: 300px;
            min-height: 20px;
            display: block;
            background-color: #4a77d4;
            border: 1px solid #3762bc;
            color: #fff;
            padding: 9px 0;
            font-size: 15px;
            line-height: normal;
            border-radius: 4px;
            margin: 0;
            text-align: center;
        }
        .msg {
            color: red;
            margin: 0;
            line-height: 30px;
        }
    </style>
</head>
<body>
<div>
<?php
//todo  url的生成
?>
</div>
<div id="login">
    <h1>Login</h1>
    <form method="post" data-action="<?php $this->makeUrl('login','login')?>">
        <input type="text" required="required" placeholder="用户名" name="account">
        <input type="password" required="required" placeholder="密码" name="password">
        <p class="msg"></p>
        <a class="but">登录</a>
    </form>
</div>
<script>
    $('.but').click(function () {
            var post_data = $('form').serialize();
            var action = $('form').data('action');
            $.ajax({
                type:'GET',
                dataType:'json',
                url:action,
                data:post_data,
                success:function (data){
                    if(data.ok){
                        location.href='<?php $this->makeUrl()?>'
                    }else{
                        $('.msg').html(data.msg);
                    }
                },
                error:function (){

                }
            });
        }
    );
</script>
</body>
</html>