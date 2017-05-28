<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta name="format-detection" content="telephone=no">
		<meta charset="UTF-8">
		<title>公司首页</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style.css"/>
	</head>
	<body>
		<header>
			<nav>
				<span class="nav-item menu" id="open-icon">
					<img src="__PUBLIC__/img/menu.png"/>
				</span>
				<span class="nav-item logo">
					<img src="__PUBLIC__/img/logo.png"/>
				</span>
				<span class="nav-item admin">
					<img src="__PUBLIC__/img/people.png"/>
				</span>
				<div class="clearfix"></div>
			</nav>
			<ul class="nav-list" id="nav-list">
				<a class="font40" href="index.html"><li class="navlist-item">公司首页</li></a>
				<a class="font40" href="company.html"><li class="navlist-item">公司简介</li></a>
				<a class="font40" href="###"><li class="navlist-item">精彩专题</li></a>
				<a class="font40" href="new-center.html"><li class="navlist-item">新闻中心</li></a>
				<a class="font40" href="product.html"><li class="navlist-item">产品展示</li></a>
				<a class="font40" href="company-pic.html"><li class="navlist-item">公司相册</li></a>
				<a class="font40" href="online-message.html"><li class="navlist-item">在线留言</li></a>
				<a class="font40" href="contact.html"><li class="navlist-item">联系我们</li></a>
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
					<a class="font40 fontwhite company-introitem index-compcur" href="###"><li>公司简介</li></a>
					<a class="font40 fontwhite company-introitem" href="###"><li>公司文化</li></a>
					<a class="font40 fontwhite company-introitem" href="###"><li>发展历程</li></a>
					<a class="font40 fontwhite company-introitem" href="###"><li>公司荣誉</li></a>
					<div class="clearfix"></div>
				</ul>
				<div class="company-conwrap">
					<div class="company-content">
						<span class="company-conpic">
							<img src="__PUBLIC__/img/company-pic.png"/>
						</span>
						<span class="company-contxt">
							<p class="company-conitem font24">
								111山东临网网络科技有限公司起始于2008年。公
								司总部设立于国家级经济技术开发区中印软件产
								业园（临沂云计算中心）。公司云集了一支专业、
								专注、高素质、高标准的互联网精英团队。我们以
								奉献网络科技而缩短人际沟通距离为目标，全心致力
								于企事业单位建站和电子商务的应用及推广，重塑企业
								高端网络形象，为企业产品推广文化发展提供全方位的服
								务和帮助。
							</p>
							<p class="company-conitem font24">
								111公司业务涵盖品牌网站建设、搜索引擎优化、
								应用软件开发、电子商务培训、电商平台搭建
								和广告设计制作等。我们将一直秉承"技术创新，
								诚信服务"的原则，坚持不懈走技术、创新路线，诚
								信合作，高效服务于各行业领域，结合行业运营，优化
								技术，精细运作，将服务理念通过技术执行得以更有效的
								体现，最大化实现企业价值……
							</p>
							<a href="company.html" class="font20 company-conicon more-icon">[查看详情]</a>
							<div class="clearfix"></div>
						</span>
					</div>
					<div class="company-content box-hidden">
						<span class="company-conpic">
							<img src="__PUBLIC__/img/company-pic2.png"/>
						</span>
						<span class="company-contxt">
							<p class="company-conitem font24">
								222山东临网网络科技有限公司起始于2008年。公
								司总部设立于国家级经济技术开发区中印软件产
								业园（临沂云计算中心）。公司云集了一支专业、
								专注、高素质、高标准的互联网精英团队。我们以
								奉献网络科技而缩短人际沟通距离为目标，全心致力
								于企事业单位建站和电子商务的应用及推广，重塑企业
								高端网络形象，为企业产品推广文化发展提供全方位的服
								务和帮助。
							</p>
							<p class="company-conitem font24">
								222公司业务涵盖品牌网站建设、搜索引擎优化、
								应用软件开发、电子商务培训、电商平台搭建
								和广告设计制作等。我们将一直秉承"技术创新，
								诚信服务"的原则，坚持不懈走技术、创新路线，诚
								信合作，高效服务于各行业领域，结合行业运营，优化
								技术，精细运作，将服务理念通过技术执行得以更有效的
								体现，最大化实现企业价值……
							</p>
							<a href="company.html" class="font20 company-conicon more-icon">[查看详情]</a>
							<div class="clearfix"></div>
						</span>
					</div>
					<div class="company-content box-hidden">
						<span class="company-conpic">
							<img src="__PUBLIC__/img/company-pic.png"/>
						</span>
						<span class="company-contxt">
							<p class="company-conitem font24">
								333山东临网网络科技有限公司起始于2008年。公
								司总部设立于国家级经济技术开发区中印软件产
								业园（临沂云计算中心）。公司云集了一支专业、
								专注、高素质、高标准的互联网精英团队。我们以
								奉献网络科技而缩短人际沟通距离为目标，全心致力
								于企事业单位建站和电子商务的应用及推广，重塑企业
								高端网络形象，为企业产品推广文化发展提供全方位的服
								务和帮助。
							</p>
							<p class="company-conitem font24">
								333公司业务涵盖品牌网站建设、搜索引擎优化、
								应用软件开发、电子商务培训、电商平台搭建
								和广告设计制作等。我们将一直秉承"技术创新，
								诚信服务"的原则，坚持不懈走技术、创新路线，诚
								信合作，高效服务于各行业领域，结合行业运营，优化
								技术，精细运作，将服务理念通过技术执行得以更有效的
								体现，最大化实现企业价值……
							</p>
							<a href="company.html" class="font20 company-conicon more-icon">[查看详情]</a>
							<div class="clearfix"></div>
						</span>
					</div>
					<div class="company-content box-hidden">
						<span class="company-conpic">
							<img src="__PUBLIC__/img/company-pic2.png"/>
						</span>
						<span class="company-contxt">
							<p class="company-conitem font20">
								444山东临网网络科技有限公司起始于2008年。公
								司总部设立于国家级经济技术开发区中印软件产
								业园（临沂云计算中心）。公司云集了一支专业、
								专注、高素质、高标准的互联网精英团队。我们以
								奉献网络科技而缩短人际沟通距离为目标，全心致力
								于企事业单位建站和电子商务的应用及推广，重塑企业
								高端网络形象，为企业产品推广文化发展提供全方位的服
								务和帮助。
							</p>
							<p class="company-conitem font20">
								444公司业务涵盖品牌网站建设、搜索引擎优化、
								应用软件开发、电子商务培训、电商平台搭建
								和广告设计制作等。我们将一直秉承"技术创新，
								诚信服务"的原则，坚持不懈走技术、创新路线，诚
								信合作，高效服务于各行业领域，结合行业运营，优化
								技术，精细运作，将服务理念通过技术执行得以更有效的
								体现，最大化实现企业价值……
							</p>
							<a href="company.html" class="font20 company-conicon more-icon">[查看详情]</a>
							<div class="clearfix"></div>
						</span>
					</div>
				</div>
			</div>
			<div class="news-box">
				<ul class="news-wrap">
					<a class="font40 fontwhite new-tit index-newscur" href="###"><li>行业新闻</li></a>
					<a class="font40 fontwhite new-tit" href="###"><li>公司动态</li></a>
					<a class="font40 fontwhite new-tit" href="###"><li>专题报道</li></a>
					<div class="clearfix"></div>
				</ul>
				<div class="news-newtitwrap">
					<div class="news-titwrap">
						<a class="news-tititem" href="new-con.html">
							<span class="news-titleft font20">111马云判断：未来30年，计划经济会越来越大，数据将成为主导。</span>
							<span class="news-titright font18">2016-12-15</span>
							<div class="clearfix"></div>
						</a>
						<a class="news-tititem" href="company.html">
							<span class="news-titleft font20">111马云判断：未来30年，计划经济会越来越大，数据将成为主导。</span>
							<span class="news-titright font18">2016-12-15</span>
							<div class="clearfix"></div>
						</a>
						<a class="news-tititem" href="company.html">
							<span class="news-titleft font20">111马云判断：未来30年，计划经济会越来越大，数据将成为主导。</span>
							<span class="news-titright font18">2016-12-15</span>
							<div class="clearfix"></div>
						</a>
						<a class="news-tititem height-bottom" href="company.html">
							<span class="news-titleft font20">111马云判断：未来30年，计划经济会越来越大，数据将成为主导。</span>
							<span class="news-titright font18">2016-12-15</span>
							<div class="clearfix"></div>
						</a>
					</div>
					<div class="news-titwrap box-hidden">
						<a class="news-tititem" href="company.html">
							<span class="news-titleft font20">222马云判断：未来30年，计划经济会越来越大，数据将成为主导。</span>
							<span class="news-titright font18">2016-12-15</span>
							<div class="clearfix"></div>
						</a>
						<a class="news-tititem" href="company.html">
							<span class="news-titleft font20">222马云判断：未来30年，计划经济会越来越大，数据将成为主导。</span>
							<span class="news-titright font18">2016-12-15</span>
							<div class="clearfix"></div>
						</a>
						<a class="news-tititem" href="company.html">
							<span class="news-titleft font20">222马云判断：未来30年，计划经济会越来越大，数据将成为主导。</span>
							<span class="news-titright font18">2016-12-15</span>
							<div class="clearfix"></div>
						</a>
						<a class="news-tititem height-bottom" href="company.html">
							<span class="news-titleft font20">222马云判断：未来30年，计划经济会越来越大，数据将成为主导。</span>
							<span class="news-titright font18">2016-12-15</span>
							<div class="clearfix"></div>
						</a>
					</div>
					<div class="news-titwrap box-hidden">
						<a class="news-tititem" href="company.html">
							<span class="news-titleft font20">333马云判断：未来30年，计划经济会越来越大，数据将成为主导。</span>
							<span class="news-titright font18">2016-12-15</span>
							<div class="clearfix"></div>
						</a>
						<a class="news-tititem" href="company.html">
							<span class="news-titleft font20">333马云判断：未来30年，计划经济会越来越大，数据将成为主导。</span>
							<span class="news-titright font18">2016-12-15</span>
							<div class="clearfix"></div>
						</a>
						<a class="news-tititem" href="company.html">
							<span class="news-titleft font20">333马云判断：未来30年，计划经济会越来越大，数据将成为主导。</span>
							<span class="news-titright font18">2016-12-15</span>
							<div class="clearfix"></div>
						</a>
						<a class="news-tititem height-bottom" href="company.html">
							<span class="news-titleft font20">333马云判断：未来30年，计划经济会越来越大，数据将成为主导。</span>
							<span class="news-titright font18">2016-12-15</span>
							<div class="clearfix"></div>
						</a>
					</div>
				</div>
				<a href="new-center.html" class="font30 more-icon news-moreicon">查看更多&gt;</a>
			</div>
			<div class="product-box">
				<span class="product-tit font30 fontwhite">产品信息</span>
				<a href="product.html" class="product-conwrap">
					<span class="product-pic">
						<img src="__PUBLIC__/img/company-pic.png"/>
					</span>
					<p class="font30 fontwhite product-txt">
						产品展示一
					</p>
				</a>
			</div>
		</section>
		
		
		
		
		
		
		<footer>
			<a class="font40" id="return" href="#">
				返回顶部
			</a>
			<ul class="footer-iconwrap">
				<a class="font40" href="###">
					<li class="footer-icon">
						<span class="icon-pic"><img src="__PUBLIC__/img/footer-tel.png"/></span>
						<p class="icon-text">客服电话</p>
					</li>
				</a>
				<a class="font40" href="###">
					<li class="footer-icon">
						<span class="icon-pic"><img src="__PUBLIC__/img/footer-weixin.png"/></span>
						<p class="icon-text">微信公众号</p>
					</li>
				</a>
				<a class="font40" href="###">
					<li class="footer-icon">
						<span class="icon-pic"><img src="__PUBLIC__/img/footer-weibo.png"/></span>
						<p class="icon-text">官方微博</p>
					</li>
				</a>
				<a class="font40" href="###">
					<li class="footer-icon">
						<span class="icon-pic"><img src="__PUBLIC__/img/footer-aa.png"/></span>
						<p class="icon-text">客服QQ</p>
					</li>
				</a>
				<div class="clearfix"></div>
				<div class="footer-note">
					<p class="font40 note-item">鲁ICP备16012712号 copyright © www.mycodes.net</p>
					<p class="font40 note-item">鲁公网安备 37131202371231号</p>
				</div>
			</ul>
		</footer>
	</body>
<!--<script src="__PUBLIC__/lib/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>-->	
<script type="text/javascript" src="__PUBLIC__/lib/public.js" ></script>
<script src="__PUBLIC__/lib/jquery.min.js"></script>
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