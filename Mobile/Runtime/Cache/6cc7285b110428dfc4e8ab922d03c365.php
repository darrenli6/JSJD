<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>个人中心</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- loading mui -->
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/center/css/mui.min.css">
	<!-- custorm style -->
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/center/css/style.css">
		 
	<!-- loading mui.picker.min -->
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/center/css/mui.picker.min.css">
	<!-- loading mui.popicker -->
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/center/css/mui.poppicker.css">
	<!-- custorm style -->
</head>
<body>
	<!-- 导航栏 -->
	<header id="header" class="mui-bar mui-bar-nav">
		<h1 class="mui-title"></h1>
		<a class="mui-action-back mui-btn mui-btn-blue mui-btn-link mui-btn-nav mui-pull-left" href="javascript:history.go(-1)"><span class="mui-icon mui-icon-left-nav"></span></a>
		<a class="mui-icon mui-icon-bars mui-pull-right" href="#topPopover"></a>
	</header>
	<!-- 右上角弹出菜单 -->
	<div id="topPopover" class="mui-popover">
			<div class="mui-popover-arrow"></div>
			<div class="mui-scroll-wrapper">
				<div class="mui-scroll">
					<ul class="mui-table-view">
						<li class="mui-table-view-cell">
							<a href="<?php echo U('Index/index'); ?>">首页</a>
						</li>
						<li class="mui-table-view-cell"><a href="<?php echo U('Usercenter/qualityinfo'); ?>">素质拓展表</a>
						</li>
					     <li class="mui-table-view-cell"><a href="<?php echo U('Usercenter/index'); ?>">个人中心</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- 主内容部分 -->
	<div class="content">
		<section class="xueqi">
			<div class="class">
				<label id="classResult">个人中心</label>
			</div>
		</section>
		<section class="personData">
			<ul class="mui-table-view mui-table-view-chevron">
				<li class="mui-table-view-cell mui-media">
					<a class="mui-navigate-right" href="#">
					    <?php if(empty($stuinfo['face'])): ?>
						<img class="mui-media-object mui-pull-left head-img" id="
						head-img" src="__PUBLIC__/center/img/people.png">
						<?php endif; ?>
						 <?php if(!empty($stuinfo['face'])): ?>
						<img class="mui-media-object mui-pull-left head-img" id="
						head-img" src="<?php echo C('SHOWIMAGE').$stuinfo['face'] ?>">
						<?php endif; ?>
						<label class="name"><?php echo $stuinfo['stuname']; ?></label>
					</a>
				</li>
			</ul>
			<ul class="mui-table-view">
				<li class="mui-table-view-cell">
					<a>班级<span class="mui-pull-right"><?php echo $stuinfo['name']; ?></span></a>
				</li>
				<li class="mui-table-view-cell">
					<a>学号<span class="mui-pull-right"><?php echo $stuinfo['stu_id']; ?></span></a>
				</li>
				<li class="mui-table-view-cell">
					<a>性别<span class="mui-pull-right"><?php echo $stuinfo['sex']==0?'女':'男'; ?></span></a>
				</li>
				 
				<li class="mui-table-view-cell">
					<a>手机号<span class="mui-pull-right"><?php echo $stuinfo['mobilephone']==NULL?'暂无':$stuinfo['mobilephone']; ?></span></a>
				</li>
				<li class="mui-table-view-cell">
					<a>名族<span class="mui-pull-right"><?php echo $stuinfo['nation']==NULL?'汉族':$stuinfo['nation']; ?></span></a>
				</li>
			</ul>
		</section>
	</div>
	<script src="__PUBLIC__/center/js/mui.min.js"></script>
</body>
</html>