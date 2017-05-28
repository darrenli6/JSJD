<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="__PUBLIC__/UserCenter/css/reset.css">
	<link rel="stylesheet" href="__PUBLIC__/UserCenter/css/public.css">
</head>
<body>
<div class="public-header-warrp">
	<div class="public-header">
		<div class="content">
			<div class="public-header-logo"><a href=""><i>LOGO</i><h3><?php echo session('stuid'); ?></h3></a></div>
			<div class="public-header-admin fr">
				<p class="admin-name"> 您好！</p>
				<div class="public-header-fun fr">
					<a href="" class="public-header-man">管理</a>
					<a href="" class="public-header-loginout">安全退出</a>	
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<!-- 内容展示 -->
<div class="public-ifame mt20">
	<div class="content">
	  
		<!-- 左侧导航栏 -->
		<div class="public-ifame-leftnav">
			<div class="public-title-warrp">
				<div class="public-ifame-title ">
					<a href="">首页</a>
				</div>
			</div>
			<ul class="left-nav-list">
				<li class="public-ifame-item">
					<a href="javascript:;">个人信息</a>
					<div class="ifame-item-sub">
						<ul>
							<li class="active"><a href="<?php echo U('personinfo');?>" target="content">个人资料</a></li>
							<li><a href="系统管理/admin_music.html" target="content"></a></li>
							<li><a href="系统管理/admin_cardTemplate.html" target="content">名片模板管理</a></li>
							<li><a href="系统管理/index_tj.html" target="content">首页推荐导航</a></li>
						</ul>
					</div>
				</li>
				<li class="public-ifame-item">
					<a href="javascript:;">党员信息</a>
					<div class="ifame-item-sub">
						<ul>
							<li><a href="信息管理/article_manage.html" target="content">列表管理</a>|<a href="信息管理/article_add.html" target="content">添加</a></li>
							<li><a href="信息管理/cate_manage.html" target="content">分类管理</a></li>
						</ul>
					</div>
				</li>
			 
				 
			</ul>
		</div>
		<!-- 右侧内容展示部分 -->
		<div class="public-ifame-content">
		<iframe name="content" src="<?php echo ('main');?>" frameborder="0" id="mainframe" scrolling="yes" marginheight="0" marginwidth="0" width="100%" style="height: 700px;"></iframe>
		</div>
	</div>
</div>
<script src="__PUBLIC__/UserCenter/js/jquery.min.js"></script>
<script>
$().ready(function(){
	var item = $(".public-ifame-item");

	for(var i=0; i < item.length; i++){
		$(item[i]).on('click',function(){
			$(".ifame-item-sub").hide();
			if($(this.lastElementChild).css('display') == 'block'){
				$(this.lastElementChild).hide()
				$(".ifame-item-sub li").removeClass("active");
			}else{
				$(this.lastElementChild).show();
				$(".ifame-item-sub li").on('click',function(){
					$(".ifame-item-sub li").removeClass("active");
					$(this).addClass("active");
				});
			}
		});
	}
});
</script>
</body>
</html>