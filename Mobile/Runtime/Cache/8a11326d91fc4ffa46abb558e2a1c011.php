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
				<span class="font40 comp-tit comp-float">投诉建议</span>
				<span class="font40 comp-line comp-floatr"></span>
			<div class="clearfix"></div>
			<div class="onlin-conbox">
					<form   id="on"   >
						 
						<span class="online-conitem">
							<label for="online-tel" class="online-contit">您的电话：</label>
							<input type="text" name="phone" value="Tel" onfocus="if(this.value=='Tel'){this.value=''};this.style.color='#666666';"
	onblur="if(this.value==''||this.value=='Tel'){this.value='Tel';this.style.color='#C4C4C4';}" id="online-tel" />
						</span>
						<span class="online-conitem">
							<label for="online-email" class="online-contit">您的邮箱：</label>
							<input type="text" value="E-mail"  name="email" onfocus="if(this.value=='E-mail'){this.value=''};this.style.color='#666666';"
	onblur="if(this.value==''||this.value=='E-mail'){this.value='E-mail';this.style.color='#C4C4C4';}" id="online-email" />
						</span>
						<span class="online-conitem">
							<label for="online-context" class="online-contit">您的留言：</label>
							<textarea name="content" id="online-context"  value="Contact" rows="2"> </textarea>
						</span>
					
 
					<div class="clearfix"></div>
					<button type="reset" form="online-reset"  onclick="reset()" id="online-resicon">重置内容</button><!--reset重置内容-->
					<button type="submit" form="online-reset"  onclick="s()" id="online-subicon">提交留言</button>
					<!--submit提交内容-->
				</form>
				 </div>
		</section>
		
		<script type="text/javascript">
		var url="<?php echo U('About/submitcon'); ?>";
		function s(){
			var email=$('input[name=email]').val();
			var phone=$('input[name=phone]').val();
			var content=$('textarea[name=content]').val();
			$.post(
				url,
				{email:email,phone:phone,content:content},
				function(msg){
				  if(msg.status==1)
					{
					  layer.msg('提交成功');
					}else{
				      layer.msg('提交失败');
					}
				},
				'json'
			);
			 
		}
		function reset(){
			$('input[name=email]').val('');
			$('input[name=phone]').val('');
			$('textarea[name=content]').val('');
			
		}
		</script>
		
		
		
	 
		
		
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