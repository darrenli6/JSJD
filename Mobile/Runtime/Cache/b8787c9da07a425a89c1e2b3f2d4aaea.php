<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta name="format-detection" content="telephone=no">
		<meta charset="UTF-8">
		<title>计算机系</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style.css"/>
		<script src="__PUBLIC__/lib/jquery-1.8.3.min.js"></script>
		<script src="__PUBLIC__/js/layer.js"></script>
	</head>
	<body>
		<header>
			<nav>
				<span class="nav-item menu" id="open-icon">
					<img src="__PUBLIC__/img/menu.png"/>
				</span>
				<span class="nav-item logo">
					<img src="__PUBLIC__/img/czxy.png" width="30px" height="50px"/>
				</span>
				<span class="nav-item admin">
				<?php if(session('sid')){ ?> 
					<img src="__PUBLIC__/img/people.png"/>
				<?php } ?>	
				</span>
				<div class="clearfix"></div>
			</nav>
			<ul class="nav-list" id="nav-list">
				<a class="font40" href="<?php echo U('Index/index') ?>"><li class="navlist-item">首页</li></a>
                <?php if(!session('sid')){ ?> 
                 <a class="font40" href="<?php echo U('Login/index') ?>"><li class="navlist-item">注册登录</li></a>
			     <?php }else{ ?>
			      <a class="font40" href="<?php echo U('Login/logout') ?>"><li class="navlist-item">退出登录</li></a>
			     <?php }?>
			     <a class="font40" href="<?php echo U('Subjectrace/index') ?>"><li class="navlist-item">学科竞赛</li></a>
			     <a class="font40" href="<?php echo U('Party/index') ?>"><li class="navlist-item">新闻中心</li></a>
                 <a class="font40" href="<?php echo U('About/contact') ?>"><li class="navlist-item">投诉建议</li></a>	     
			     <a class="font40" href="<?php echo U('About/index') ?>"><li class="navlist-item">联系我们</li></a>
			</ul>
			<!--<banner class="banner clear">-->
			    <div id="focus" class="focus banner clear">
			        <div class="hd">
			            <ul>
			            	<li></li>
			            </ul>
			        </div>
			        <div class="bd">
			            <ul>
			                <?php foreach($rotatedata as $k=>$v): ?>
		                    <li><a href="#"><img src="__ROOT__/Public/rotate/<?php echo $v['cvalue'];?>" width="100%" height="100%"></a></li>
                             <?php endforeach; ?>		
			            </ul>
			        </div>
			    </div>
			<!--</banner>-->
		</header>
		
		
		
		 
		<section>
			<div class="comp-titwrap">
				<span class="font40 comp-line comp-float"></span>
				<span class="font40 comp-tit comp-float">新闻中心</span>
				<span class="font40 comp-line comp-floatr"></span>
				<div class="clearfix"></div>
			</div>
			<div class="news-box">
				<ul class="news-wrap">
					<a class="font40 fontwhite new-tit index-newscur" href="###"><li>党员会议</li></a>
					<a class="font40 fontwhite new-tit" href="###"><li>新闻汇总</li></a>
					<div class="clearfix"></div>
				</ul>
				<div class="news-newtitwrap">
					<div class="news-titwrap">
					<?php foreach($pData as $k=>$v): ?>
						<a class="news-tititem" href="new-con.html">
							<span class="news-titleft font20"><?php echo $v['title']; ?></span>
							<span class="news-titright font18"><?php echo $v['starttime']; ?></span>
							<div class="clearfix"></div>
						</a>
					
                      <?php endforeach; ?>
					</div>
					<div class="news-titwrap box-hidden">
					<?php foreach($nData as $k=>$v): ?>
						<a class="news-tititem" href="new-con.html">
							<span class="news-titleft font20"><?php echo $v['title']; ?></span>
							<span class="news-titright font18"><?php echo $v['publictime']; ?></span>
							<div class="clearfix"></div>
						</a>
					   <?php endforeach; ?>
					</div>
					 
				</div>
				 
			</div>
		</section>
		
		
		
		
	 
		
		
		<footer>
			<a class="font40" id="return" href="#">
				返回顶部
			</a>
			<ul class="footer-iconwrap">
				 
				 
				<div class="clearfix"></div>
				<div class="footer-note">
					<p class="font40 note-item" align="center">版权所有 计科1302_Darren</p>
					 
				</div>
			</ul>
		</footer>
		<script type="text/javascript" src="__PUBLIC__/lib/public.js" ></script>

<script src="__PUBLIC__/lib/TouchSlide.1.1.js"></script>
<script>
	/*字号rem尺寸变化代码*/
	window.onload=window.onresize=function(){
	    document.documentElement.style.fontSize=100*document.documentElement.clientWidth/750+'px'
	};
    /*导航展开收起效果代码*/
    $(document).ready(function () {
            $("#open-icon").click(function () {
                $("#nav-list").slideToggle();
            });
        });
    /*公司简介导航切换效果*/
   	$(function(){
			$(".company-introwrap a").click(
			function(){
				$(this).addClass("index-compcur").siblings().removeClass("index-compcur")
				}
			);
		});
   	$(function(){
			$('.company-introwrap .company-introitem').click(function(){
				var $a=$(this).index();//获取序列号
			$('.company-conwrap>div').eq($a).show().siblings().hide();
		});
	});
    /*新闻中心导航切换效果*/
   	$(function(){
			$(".news-wrap a").click(
			function(){
				$(this).addClass("index-newscur").siblings().removeClass("index-newscur")
			});
		});
   	$(function(){
			$('.news-wrap .new-tit').click(function(){
				var $a=$(this).index();//获取序列号
			$('.news-newtitwrap>div').eq($a).show().siblings().hide();
		});
	});
//banner
    TouchSlide({ 
		slideCell:"#focus",
		titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
		mainCell:".bd ul", 
		effect:"leftLoop", 
		autoPlay:true,//自动播放
		autoPage:true, //自动分页
		switchLoad:"_src" //切换加载，真实图片路径为"_src" 
	});
</script>
<script src="__PUBLIC__/js/choose.js"></script>	
</html>