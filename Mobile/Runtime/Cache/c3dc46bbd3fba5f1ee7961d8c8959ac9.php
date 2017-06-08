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
		
		
		
		 
 <style type="text/css">

#panel {
            position: absolute;
            background-color: white;
            max-height: 80%;
            overflow-y: auto;
            top:254px;
            right: 10px;
            width: 170px;
            border: solid 1px silver;
            font-size:10pt;
        }
    td {
	cursor: hand;
	font-family: Tahoma;
	width:100%; 
	font-size: 10pt
}

li {
 
	font-family: Tahoma;
 
	font-size: 9pt
}

.up {
	background-color: #48D1CC;
	border-left: 1 solid #A6C1DF;
	border-right: 1 solid #002200;
	border-top: 1 solid #A6C1DF;
	border-bottom: 1 solid #002200
}  
span{
	font-size:8pt;
}            
</style>
     <link rel="stylesheet" href="http://cache.amap.com/lbs/static/main.css?v=1.0"/>
     <script type="text/javascript"
       src="http://webapi.amap.com/maps?v=1.3&key=95874d8ff8cb988804b924431ae3543b"></script>
		<section>
			<div class="comp-titwrap">
				<span class="font40 comp-line comp-float"></span>
				<span class="font40 comp-tit comp-float">联系我们</span>
				<span class="font40 comp-line comp-floatr"></span>
			<div class="clearfix"></div>
			
			<div class="map-wrap">
				<div style="width:100%;height:5rem;border:#ccc solid 1px;" id="dituContent"></div>
				<span class="map-notewrap font24 fontwhite">
					<p class="map-note">长治学院计算机系</p>
				</span>
			</div>
			<div class="contact-wrap">
				<p class="contact-item font30">联系方式</p>
				<p class="contact-item font30">电话：0539-8800978</p>
				<p class="contact-item font30">E-Mail：darren94me@gmail.com</p>
				<p class="contact-item font30">地址：长治学院计算机系</p>
			</div>
		</section>
		
		
		
	<div id="panel">
   出发地<input type="text" id="start"  value="火车站"/><br />
   目的地<input type="text" id="end"   value="长治学院" />
     <input type="button" onclick="getData();" value="确定" />
     <input type="button" onclick="javascript:location.href='<?php echo U('index'); ?>'" value="返回" />
     <div id="result"  align="left">
     
     </div>
  </div>
     
  
<script type="text/javascript">
 
   
    var map = new AMap.Map("dituContent", {
        resizeEnable: true,
        center: [113.08,36.18],//地图中心点
        zoom: 13 //地图显示的缩放级别
    });
    /*
     * 调用公交换乘服务
     */
    function getData(){ 
    var start=document.getElementById('start').value;	
    var end=document.getElementById('end').value;	
    //console.log(start+"---"+end);
    //加载公交换乘插件
    AMap.service(["AMap.Transfer"], function() {
        var transOptions = {
            map: map,
            city: '长治',
            //cityd:'乌鲁木齐',
            policy: AMap.TransferPolicy.LEAST_TIME //乘车策略
        };
        //构造公交换乘类
        var trans = new AMap.Transfer(transOptions);
        //根据起、终点坐标查询公交换乘路线
        trans.search([{keyword:start},{keyword:end}], function(status, result){
        	 
        	if(result.info=='OK')
        	{   var num=result.plans.length;
        		var str='<span >长院计算机系温馨提示:一共有'+num+'种方案:</span>';
        		str+='<div align="left"><table border="0" width="100%" cellspacing="0" cellpadding="0">';
        		
        		var obj=result.plans;
        		for(var i=0;i<result.plans.length;i++)
                {   
        			str+='<tr><td><div class=up onclick=show("a'+i+'")>花费'+obj[i].cost+'元,用时'+parseInt(obj[i].time/60)+'分钟.</div><div  id="a'+i+'" style="display: none">';
                	console.log(obj[i]);
                	 var obj1=obj[i].segments;
                    for(var j=0;j<obj1.length;j++)
                    	{
                    	 
                    	str+='<li class=k>'+obj1[j].instruction+'</li>';
                    	console.log(""+obj1[j].instruction);
                    	
                    	}
                    str+="</div></td></tr>";
                 
                    
                } 
        		str+="</table></div>";
                document.getElementById('result').innerHTML=str;
        		console.log(str);
        	}	
        	 	
        	
        });
    });
    
    }
   
    function show(c_Str) 
    {if(document.all(c_Str).style.display=='none') 
    {document.all(c_Str).style.display='block';} 
    else{document.all(c_Str).style.display='none';}} 


    </script>
</script>
 <script type="text/javascript" src="http://webapi.amap.com/demos/js/liteToolbar.js"></script>
		
		 
		
		
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