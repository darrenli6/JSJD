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
				     <a href="<?php echo U('Usercenter/index'); ?>">
					<img src="__PUBLIC__/img/people.png"/>
					</a>
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
	<!--	<form action="" method="post" target="_blank">-->
			<lable id="search-wrap" class="search-wrap">
				<input id="search-input" class="search-input"style="color: #999999;" type="text" name="address"  value="请输入关键词搜索" onfocus="if(this.value=='请输入关键词搜索'){this.value=''};this.style.color='#999999';"
				onblur="if(this.value==''||this.value=='请输入关键词搜索'){this.value='请输入关键词搜索'};this.style.color='#999999';">
				<button id="search-button" class="search-button" type="submit">
					<img src="__PUBLIC__/img/search.png"/>
				</button>
			</lable>
		<!--</form>-->
			<div class="company-box">
				<ul class="company-introwrap">
					<a class="font40 fontwhite company-introitem index-compcur" href="###"><li><?php echo $newses[0]['title']; ?></li></a>
				  <?php foreach($newses as $k=>$v): if($k==0) continue; ?>
					<a class="font40 fontwhite company-introitem" href="###"><li><?php echo $v['title'] ?></li></a>
					<?php endforeach; ?>
					<div class="clearfix"></div>
				</ul>
				<div class="company-conwrap">
					<div class="company-content">
						<span class="company-conpic">
							<img width="376px" height="279px" src="<?php echo C('SHOWIMAGE').$newses[0]['img']; ?>"/>
						</span>
						<span class="company-contxt">
							<p class="company-conitem font24">
							  <?php echo $newses[0]['summary'].'..'; ?>
							</p>
						 
							<a href="company.html" class="font20 company-conicon more-icon">[查看详情]</a>
							<div class="clearfix"></div>
						</span>
					</div>
					<?php foreach($newses as $k=>$v): if($k==0) continue; ?>
					<div class="company-content box-hidden">
						<span class="company-conpic">
							<img src="<?php echo C('SHOWIMAGE').$v['img']; ?>"/>
						</span>
						<span class="company-contxt">
							<p class="company-conitem font24">
								<?php echo $v['summary'].'..'; ?> 
							</p>
						 
							<a href="company.html" class="font20 company-conicon more-icon">[查看详情]</a>
							<div class="clearfix"></div>
						</span>
					</div>
				 <?php endforeach; ?>
				</div>
			</div>
			<div class="news-box">
				<ul class="news-wrap">
					<a class="font40 fontwhite new-tit index-newscur" href="###"><li>党员会议</li></a>
					 
					<div class="clearfix"></div>
				</ul>
				<div class="news-newtitwrap">
					<div class="news-titwrap">
					<?php foreach($partyData as $k=>$v): ?>
						<a class="news-tititem" href="<?php echo U('Party/index'); ?>">
							<span class="news-titleft font20"><?php echo $v['title']; ?></span>
							<span class="news-titright font18"><?php echo $v['starttime']; ?></span>
							<div class="clearfix"></div>
						</a>
					<?php endforeach; ?>	 
					</div>
					 
				</div>
				<a href="new-center.html" class="font30 more-icon news-moreicon">查看更多&gt;</a>
			</div>
			<div class="product-box">
				<span class="product-tit font30 fontwhite">学科竞赛</span>
				 
				<a href="<?php echo U('Subjectrace/detail',array('sid'=>$srs['id'])); ?>" class="product-conwrap">
					<span class="product-pic">
						<img width="376px" height="279px" src="<?php echo C('SHOWIMAGE').$srs['smallimg']; ?>"/>
					</span>
					<p class="font30 fontwhite product-txt">
						<?php echo $srs['racename']; ?>
					</p>
				</a>
				 
			</div>
		</section>
		
		
		
		
		
		
		
	</body>

		
		
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