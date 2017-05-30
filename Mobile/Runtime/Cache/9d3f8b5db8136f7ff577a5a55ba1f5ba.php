<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title></title>
    <link rel="stylesheet" href="__PUBLIC__/login/css/common.css"/>
    <link rel="stylesheet" href="__PUBLIC__/login/css/login.css"/>
</head>
<body>
    <div id="login"></div>
    <div class="login_bg">
        <div id="logo">
            <img src="__PUBLIC__/login/images/czxy.png" alt=""/>
        </div>
        <form action="__SELF__" method="POST">
            <div class="userName">
                <lable>学号：</lable>
                <input type="text" name="stuid" placeholder="请输入学号" pattern="[0-9]{6,16}" required/>
            </div>
            <div class="passWord">
                <lable>密&nbsp;&nbsp;&nbsp;码：</lable>
                <input type="password" name="password" placeholder="请输入密码" pattern="[0-9A-Za-z]{6,25}" required/>
            </div>
            <div class="choose_box">
                <div>
                    <input type="checkbox" checked="checked" name="auto"/>
                    <lable>记住密码</lable>
                </div>
                 
                <a href="<?php echo U('Login/reg'); ?>">申请用户</a>
                
            </div>
            <button class="login_btn" type="submit">登&nbsp;&nbsp;录</button>
        </form>
     
       
    </div>
</body>
</html>