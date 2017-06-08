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
				
				<!-- <li><a href="#">管理页</a></li> -->
			</ul>
		</div>
		<div class="top_right">
			<ul>
				<li>管理员：<?php echo ($_SESSION['adminusername']); ?></li>
				<li><a href="<?php echo U('System/modifyPwd');?>" target="main">修改密码</a></li>
				<li><a href="<?php echo U('Login/logout');?>">退出</a></li>
			</ul>
		</div>
	</div>
	<!--头部 结束-->
	
	
	

	<!--左侧导航 开始-->
	<div class="menu_box">
		<ul>
		  <?php $btns=D('Privilege')->getBtns(); foreach($btns as $k=>$v): ?>
            <li>
            	<h3><i class="fa fa-fw fa-clipboard"></i><?php echo $v['priname'];?></h3>
                <ul class="sub_menu">
                   <?php foreach($v['children'] as $k1=>$v1 ):?>
                    <li><a href="<?php echo U($v1['modulename'].'/'.$v1['controllername'].'/'.$v1['actionname']);?>" target="main">
                    <i class="fa fa-fw fa-plus-square"></i><?php echo $v1['priname']; ?></a></li>
                   <?php endforeach; ?>
                </ul>
                 <?php endforeach; ?>
            </li>
        
        </ul>
	</div>
	<!--左侧导航 结束-->

	<!--主体部分 开始-->
	<div class="main_box">
		<iframe src="<?php echo U('copy');?>" frameborder="0" width="100%" height="100%" name="main"></iframe> 
	</div>
	<!--主体部分 结束-->

	
	
	
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