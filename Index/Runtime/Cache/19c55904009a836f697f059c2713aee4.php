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
    
    
    
    
<div id="big_wrapper">
	
 
   <div class="top_gywm">
   			<ul>
           
                <li class="gywm_right" id="div1" style="display:block">
						<div class="gywm_xp"></div>
						<div class="gywm_rightName">
							<ul>
								<li class="gyName">简介<span>School profil</span></li>
								<li class="gyyou"></li>
							</ul>
						</div>
						<div class="gyimages">
								<ul>
									<li class="gyimagesA">
										<div>
											<ul>
												<li class="gyimagesAzuo"><img src="__PUBLIC__/images/sc1.jpeg" width="338px" height="200px"/></li>
												<li class="gyimagesAyou"><img src="__PUBLIC__/images/sc2.jpeg" width="338px"  height="200px"/></li>
											</ul>
										</div>
									</li>
									<li class="gyimagesB">

<span style="font-family: 宋体">
<br>
   &nbsp; &nbsp;  &nbsp;   计算机系具有完备的计算机教学和实验设施。计算机系实验教学中心为省级示范实验室，面积1434余平方米，下设硬件、软件、网络、信息技术四个实验区，共有（单片机、嵌入式、通信原理、综合布线、网络操作系统、网络系统集成系统、系统维护、组成原理、网络技术、软件、数据库、信息技术、多媒体技术等）等13个专业实验室，现有用于专业教学的计算机等各种教学仪器设备共2259台（件）。
<br>
    &nbsp;  &nbsp;  &nbsp;  计算机系立足应用型、复合型人才的培养，融基础理论教育与应用能力培养于一体。一方面，致力于将学生输送到高层次大学、研究所攻读本学科及相关学科的研究生，2006年以来，我系先后有150余名学生考取全国各地高校的硕士研究生；另一方面，致力于提高学生创新能力和就业能力。近两年来，我系先后有100余名在校学生通过了全国计算机技术与软件专业技术资格(中级)等各类资格考试，毕业生就业率每年不低于80%，并因“敬业精神好，综合素质高，动手能力强，上岗适应快”受到用人单位的好评。
</span>
						</li>
				</ul>
		</div>
	</li>
	
	                <li class="gywm_right"  id="div2"  style="display:none">
						<div class="gywm_xp"></div>
						<div class="gywm_rightName">
							<ul>
								<li class="gyName">企业历程<span>company profil</span></li>
								<li class="gyyou"></li>
							</ul>
						</div>
						<div class="gyimages">
								<ul>
									<li class="gyimagesA">
										<div>
											<ul>
												<li class="gyimagesAzuo"><img src="__PUBLIC__/images/qweqwe.png"  height="200px"/></li>
												<li class="gyimagesAyou"><img src="__PUBLIC__/images/qweqwe.png"  height="200px"/></li>
											</ul>
										</div>
									</li>
									<li class="gyimagesB">
									
									企业历程企业历程企业历程企业历程企业历程企业历程企业历程企业历程企业历程企业历程企业历程企业历程企业历程企业历程
									</li>
				</ul>
		</div>
	</li>
	
	
	<li class="gywm_right"  id="div3"  style="display:none">
						<div class="gywm_xp"></div> 
						<div class="gywm_rightName">
							<ul>
								<li class="gyName">荣誉资质<span>company profil</span></li>
								<li class="gyyou"></li>
							</ul>
						</div>
						<div class="gyimages">
								<ul>
									<li class="gyimagesA">
										<div>
											<ul>
												<li class="gyimagesAzuo"><img src="__PUBLIC__/images/qweqwe.png"  height="200px"/></li>
												<li class="gyimagesAyou"><img src="__PUBLIC__/images/qweqwe.png"  height="200px"/></li>
											</ul>
										</div>
									</li>
									<li class="gyimagesB">
									
									荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质荣誉资质
									</li>
				</ul>
		</div>
	</li>
	
	
	
	<li class="gywm_right"  id="div4"  style="display:none">
						<div class="gywm_xp"></div>
						<div class="gywm_rightName">
							<ul>
								<li class="gyName">企业精神<span>company profil</span></li>
								<li class="gyyou"></li>
							</ul>
						</div>
						<div class="gyimages">
								<ul>
									<li class="gyimagesA">
										<div>
											<ul>
												<li class="gyimagesAzuo"><img src="__PUBLIC__/images/qweqwe.png"  height="200px"/></li>
												<li class="gyimagesAyou"><img src="__PUBLIC__/images/qweqwe.png"  height="200px"/></li>
											</ul>
										</div>
									</li>
									<li class="gyimagesB">
									
									企业精神企业精神企业精神企业精神企业精神企业精神企业精神企业精神企业精神企业精神企业精神企业精神
								</li>
							</ul>
					</div>
	</li>
	
 </ul>

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
<script language="JavaScript" type="text/JavaScript">
 function toggle(targetid){
 	document.getElementById("div"+targetid).style.display="block";        
 	for(var i =1;i<=8;i++){
		if(targetid != i){
			document.getElementById("div"+i).style.display="none";
		}
	}
 }
 </script>
<SCRIPT src="/__PUBLIC__/lib/js/jquery.bxslider.min.js" type=text/javascript></SCRIPT>
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
                                <li class="Ur_cdA"><a href="">网站地图</a></li>
                                <li class="Ur_cdA"><a href="">友情链接</a></li>
                                <li class="Ur_cdA"><a href="">会员登录</a></li>
                                <li class="Ur_cdA"><a href="">联系我们</a></li>
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