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
				<?php if($sessionid){ ?> 
					<img src="__PUBLIC__/img/people.png"/>
				<?php } ?>	
				</span>
				<div class="clearfix"></div>
			</nav>
			<ul class="nav-list" id="nav-list">
				<a class="font40" href="<?php echo U('Index/index') ?>"><li class="navlist-item">首页</li></a>
                <?php if(!$sessionid){ ?> 
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
				<span class="font40 comp-tit comp-float">竞赛详情</span>
				<span class="font40 comp-line comp-floatr"></span>
			<div class="clearfix"></div>
			<div class="product-picwrap">
				<span class="product-item">
					<span class="product-picbox">
					    <?php if(!empty($imgSubs[$freenum][img])) { ?>
						<img width="100%" height="200px" src="<?php echo C('SHOWIMAGE').'Subjectrace/'.$imgSubs[$freenum][img]; ?>"/>
					    <?php }else{ ?>
					    <img width="100%" height="330px" src="__PUBLIC__/img/czxy.png"/>
					    <?php } ?>
					</span>
					<p class="product-text font24 fontwhite"><?php echo $dsData['racename'] ?></p>
				</span>
			</div>
			<ul class="product-notewrap">
				<li class="product-noteitem font24">开始时间：<?php echo $dsData['racetime'] ?></li>
				<li class="product-noteitem font24">结束时间：<?php echo $dsData['endtime'] ?></li>
				<li class="product-noteitem font24">组织者：<?php echo $orignals['departnames']; ?></li>
				<li class="product-noteitem font24">名称：<?php echo $dsData['racename'] ?></li>
				<div class="clearfix"></div>
			</ul>
			<div class="product-textwrap font24">
				<p class="product-textitem">
					<?php echo $dsData['summary']; ?>
				</p>
				 
			</div>
			<div class="page-wrap">
				<a href="<?php  echo $pre[0]!=null?U('Subjectrace/detail',array('sid'=>$pre[0]['id'])):''; ?>" class=" page-item page-prev fontcolor-40 font24">
				下一篇：  <?php echo $pre[0]!=null?$pre[0]['racename']:'没有活动'; ?></a>
				<a href="<?php  echo $next[0]!=null?U('Subjectrace/detail',array('sid'=>$next[0]['id'])):''; ?>" class=" page-item page-next fontcolor-40 font24">
				下一篇：
				  <?php echo $next[0]!=null?$next[0]['racename']:'没有活动'; ?>
				</a>
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