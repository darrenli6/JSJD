<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="__PUBLIC__/css/ch-ui.admin.css">
	<link rel="stylesheet" href="__PUBLIC__/font/css/font-awesome.min.css">
  
</head>
<body>
	<!--头部 开始-->
	<div class="top_box">
		<div class="top_left">
			<div class="logo">计算机系后台管理</div>
			<ul>
				<li><a href="#" class="active">首页</a></li>
				<li><a href="#">管理页</a></li>
			</ul>
		</div>
		<div class="top_right">
			<ul>
				<li>管理员：<?php echo ($_SESSION['adminusername']); ?></li>
				<li><a href="pass.html" target="main">修改密码</a></li>
				<li><a href="<?php echo U('Login/logout');?>">退出</a></li>
			</ul>
		</div>
	</div>
	<!--头部 结束-->
	
	
	
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /> 
    <?php echo html_entity_decode($content);?>
    
</script>
	
	
	<!--底部 开始-->
	<div class="bottom_box">
		CopyRight © 2017. Powered By 计科1302-Darren
	</div>
	<!--底部 结束-->
    <script type="text/javascript" src='__PUBLIC__/js/lib/jquery-1.8.2.min.js'></script>
 
    <script type="text/javascript" src='__PUBLIC__/js/lib/jquery-validate.js'></script>
     <script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/ch-ui.admin.js"></script>
</body>

</html>