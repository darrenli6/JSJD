<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="__PUBLIC__/css/ch-ui.admin.css">
	<link rel="stylesheet" href="__PUBLIC__/font/css/font-awesome.min.css">
</head>
<body style="background:#F3F3F4;">
	<div class="login_box">
		<h1>COMPUTER</h1>
		<h2>欢迎使用后台管理平台</h2>
		<div class="form">
			 
			<form action="<?php echo U('login');?>" method="post">
				<ul>
					<li>
					<input type="text" name="uname" class="text"/>
						<span><i class="fa fa-user"></i></span>
					</li>
					<li>
						<input type="password" name="pwd" class="text"/>
						<span><i class="fa fa-lock"></i></span>
					</li>
					<li>
						<input type="text" class="code" name="verify"/>
						<span><i class="fa fa-check-square-o"></i></span>
						<img src="<?php echo U('verify');?>" 
						onclick="this.src='<?php echo U("verify");?>'"  alt="">
					</li>
					<li>
						<input type="submit" name="submit" value="立即登陆"/>
					</li>
				</ul>
			</form>
			<p>  &copy; 2016 Powered by  计科1302-Darren</p>
		</div>
	</div>
</body>
</html>