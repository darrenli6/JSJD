<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <title>计算机系</title>
<link rel="stylesheet" href="__PUBLIC__/css/style.css" >
<link rel="stylesheet" href="__PUBLIC__/css/jquery.bxslider.css" >
<link rel="stylesheet" href="__PUBLIC__/css/reset.css">
 <SCRIPT src="__PUBLIC__/lib/jquery-1.8.3.min.js" type=text/javascript></SCRIPT>
 <SCRIPT src="__PUBLIC__/lib/jquery.bxslider.min.js" type=text/javascript></SCRIPT>
  <SCRIPT src="__PUBLIC__/lib/base.js" type=text/javascript></SCRIPT>
</head>

<body>
<!--头部调用--><!--导航调用-->
<!---->

<!--头部-->
	<div class="big_logo">
			<ul>
            	<li><span class="logo"></span></li>
                <li>
                	<span class="lgfw">
                			<ul>
                            	<ol class="fw_jt"></ol>
                            	<?php if(empty(session('sid'))){ ?>
                                <ol class="fw_kefu"><a href="<?php echo U('Login/index');?>">用户登录</a></ol>
                                <ol class="fw_kefu"><a href="<?php echo U('Login/index');?>">用户注册</a></ol>
                             <?php }else{ ?>
                                <ol class="fw_kefu"><a href="<?php echo U('Usercenter/index');?>">个人中心</a></ol>
                                <ol class="fw_kefu"><a href="<?php echo U('Login/logout');?>">退出</a></ol>
                             <?php } ?>
                                <ol class="fw_kefu"><a href="<?php echo U('About/contactus');?>">联系我们</a></ol>
                               
                            </ul>
                	</span>
                </li>
            </ul>
    </div>
   	<!--导航-->
    <div class="top_daohang" >
		<ul id="jsddm">
        	<li class="top_dh"><a href="<?php echo U('Index/index'); ?>">首页</a></li>
            <li class="top_dh"><a href="<?php echo U('Subjectrace/index'); ?>">学科竞赛</a>
           		<ul>
                	<li><a href="#">学习部</a></li>
                 <li><a href="#">纪律部</a></li>
               </ul> 
            </li>	
            <li class="top_dh"><a href="<?php echo U('Party/index'); ?>">党员会议</a>
          
            </li>
            
            <li class="top_dh"><a href="<?php echo U('News/index'); ?>">新闻列表</a>
            </li>
             <li class="top_dh"><a href="<?php echo U('About/index'); ?>">关于我们</a></li>
             <li class="top_dh"><a href="<?php echo U('About/contactus'); ?>">联系我们</a></li>
            <li class="top_dh"><a href="<?php echo U('Feedback/index'); ?>">投诉建议</a>


            
        </ul>
	  </div>
      
      
      
      
<div id="big_wrapper">
	
<!--轮换图调用-->
<!---->    
    <div class="top_luhuan">
		<div id="banner">
		  <ul class="bxslider1">
		  
		    <?php foreach($rotatedata as $k=>$v): ?>
			<li><img  src="__ROOT__/Public/rotate/<?php echo $v['cvalue'];?>" alt=""  width="1000px" height="531px" /></li>
            <?php endforeach; ?>		 
		  </ul>
		</div>
       
    </div>
    
    
    
    
<script type="text/javascript" src="__PUBLIC__/lib/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/lib/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/lib/jquery.kkPages.js"></script>
<SCRIPT type="text/javascript" src="__PUBLIC__/lib/base.js"></SCRIPT>
<SCRIPT type="text/javascript" src="__PUBLIC__/lib/lib.js"></SCRIPT>
<SCRIPT type="text/javascript" src="__PUBLIC__/lib/163css.js"></SCRIPT>     
      
<div id="big_wrapper">
 

  <div class="top_gywm">
   			<ul>
            	<li class="cpzx_left">
                	<div class="gywm_liebiao">
                    	<ul>
                        	<li class="gywm_lbname"><span class="spa">竞赛</span><span class="spb">race</span></li>
                            <li class="gywm_lb">
                            	<div>
                                	<ul>
                                	<?php foreach($dssData as $k=>$v): ?>
                                	<li><a href="<?php echo U('detail',array('sid'=>$v[id]));?>" ><?php echo $v['racename']; ?></a></li>
                                 <?php  endforeach;?>  
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                </li>

               <li class="cpzx_right">
               		<div class="gywm_xp"></div>
						<div class="gywm_rightName">
							<ul>
								<li class="gyName"><?php echo $dsData['racename'];?><span>race name</span></li>
								<li class="gyyou"></li>
							</ul>
						</div>
               		<div class="product_rightCP">
                        <ul>
                          	<li class="product_images">
													<div id=preview>
                                                        <div class=jqzoom id=spec-n1 onClick=""><IMG height=320
                                                        src="<?php echo C('SHOWIMAGE').$dsData['smallimg']; ?>" jqimg="<?php echo C('SHOWIMAGE').$dsData['smallimg']; ?>" width=350>
                                                        </div>
                                                        <div id=spec-n5>
                                                            <div class=control id=spec-left>
                                                                <img src="__PUBLIC__/images/left.gif" />
                                                            </div>
                                                            <div id=spec-list>
                                                                <ul class=list-h>
                                                                 
                                                                <?php foreach($imgSubs as $k=>$v): ?>
                                                                    <li><img src="<?php echo C('SHOWIMAGE').'Subjectrace/'.$v[img]; ?>"> </li>
                                                                <?php endforeach; ?>
                                                                    
                                                                </ul>
                                                            </div>
                                                            <div class=control id=spec-right>
                                                                <img src="__PUBLIC__/images/right.gif" />
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                            
                            </li>
                            <li class="product_chanshu">
                            		<div class="cpchanshu">
                                    	<ul>
                                        	<li>竞赛名称：<span><?php echo $dsData['racename']; ?></span></li>
                                            <li>开始时间：<span><?php echo $dsData['racetime']; ?></span></li>
                                            <li>结束时间：<span><?php echo $dsData['endtime']; ?></span></li>
                                            <li>组织者：<span><?php echo $orignals['departnames']; ?></span></li>
                                        </ul>
                                    </div>                            
                            </li>
                            <li class="product_jiesao">
                            	<div>
                                	<ul>
                                    	<li class="cp_bt"><span>详情</span></li>
                                        <li>
                                        <?php echo html_entity_decode($dsData['racecontent']); ?>
                                        </li>
                                    </ul>
                                </div>
                           </li> 
                        </ul>
                    </div>	
               </li> 
           </ul>
   </div> 
  
</div>
 
<script type="text/javascript">
var timeout         = 500;
var closetimer		= 0;
var ddmenuitem      = 0;

function jsddm_open()
{	jsddm_canceltimer();
	jsddm_close();
	ddmenuitem = $(this).find('ul').eq(0).css('visibility', 'visible');
	
	}

function jsddm_close()
{	if(ddmenuitem) ddmenuitem.css('visibility', 'hidden');
}

function jsddm_timer()
{	closetimer = window.setTimeout(jsddm_close, timeout);
   
}

function jsddm_canceltimer()
{	if(closetimer)
	{	window.clearTimeout(closetimer);
		closetimer = null;}}

$(document).ready(function()
{	$('#jsddm > li').bind('mouseover', jsddm_open);
	$('#jsddm > li').bind('mouseout',  jsddm_timer);});

document.onclick = jsddm_close;
  </script>
<SCRIPT type=text/javascript>
	$(function(){			
	   $(".jqzoom").jqueryzoom({
			xzoom:320,
			yzoom:320,
			offset:10,
			position:"right",
			preload:1,
			lens:1
		});
		$("#spec-list").jdMarquee({
			deriction:"left",
			width:350,
			height:56,
			step:2,
			speed:4,
			delay:10,
			control:true,
			_front:"#spec-right",
			_back:"#spec-left"
		});
		$("#spec-list img").bind("mouseover",function(){
			var src=$(this).attr("src");
			$("#spec-n1 img").eq(0).attr({
				src:src.replace("\/n5\/","\/n1\/"),
				jqimg:src.replace("\/n5\/","\/n0\/")
			});
			$(this).css({
				"border":"2px solid #ff6600",
				"padding":"1px"
			});
		}).bind("mouseout",function(){
			$(this).css({
				"border":"1px solid #ccc",
				"padding":"2px"
			});
		});				
	})
	</SCRIPT>
 
<script type="text/javascript" src="__PUBLIC__/lib/jquery.bxslider.min.js"></script> 
 
<script type="text/javascript">
$('.bxslider1').bxSlider({
  auto:true,
  infiniteLoop: true,
  hideControlOnEnd: true
});
</script>
 
 
      
<!--底部-->   

<!-- -->   
    
    
    <div class="Under">
    		<ul>
            	<li class="Ur_dizhi">版权所有(2017)长治学院计算机系</li>
                <li class="Ur_caidan">
                		<div class="Ur_cd">
                        	<ul>
                        		<li> 
                                <li class="Ur_cdA"><a href="<?php echo U('About/contacts'); ?>">网站地图</a></li>
                                
                                <li class="Ur_cdA"><a href="<?php echo U('Login/index'); ?>">会员登录</a></li>
                                <li class="Ur_cdA"><a href="<?php echo U('Feedback/index'); ?>">联系我们</a></li>
                            </ul>
                        </div>
                </li>
            </ul>
    </div>
    <div class="Under_B">
    		<ul>
            	 
                <li class="BAPPP">计科1302_Darren技术支持&nbsp;&nbsp;&nbsp;&nbsp; 
                </li>
            </ul>
    		
    </div>
</div>



<script type="text/javascript" src="__PUBLIC__/js/choose.js"></script>
</body>
</html>