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
    
    
    
   ﻿
    <!--新闻动态-->
    <div class="top_xinwen">
    	<div class="xw_xinwen">
        	<div class="xw_xw1">
            	<ul>
                	<li class="xw_Name">
                	新闻动态
                	<span class="xw_gd">
                	 <a href="<?php echo U('News/index'); ?>">
                	Learn More >>
                		</a>
                	</span></li>   	
                    <?php foreach($newses as $k=>$v): if($k==0){ ?>  
                    <li class="xw_liebiao" onmouseover="javascript:blurtitle(this)" id="title<?php echo $k; ?>">
                    <a href=""><?php echo $v['title'];?></a>
                    <span><?php echo $v['publictime'] ?></span></li>
                            <li class="xw_images" id="content<?php echo $k; ?>" style="display:block">
                                    <span class="xw_span"><img src="<?php echo $showimage.$v['img']; ?>" /></span>
                                    <span class="xw_neirong">
                                        <div class="xw_no1">
                                            <ul>
                                                <li class="cw_abcName"><?php echo $v['title'];?></li>
                                                <li class="cw_abcnoct"> <?php echo $v['summary'];?></li>
                                                <a href="<?php echo U('News/detail',array('nid'=>$v['id'])); ?>">
                                                <li class="cw_gengduo">Learn More >></li>  
                                                </a>
                                            </ul>
                                        </div>       	
                                    </span>
                            </li>
                      <?php }else{ ?>  
                         
                               <li class="xw_liebiao" onmouseover="javascript:blurtitle(this)" id="title<?php echo $k; ?>">
                    <a href=""><?php echo $v['title'];?></a>
                    <span><?php echo $v['publictime'] ?></span></li>
                            <li class="xw_images" id="content<?php echo $k; ?>" style="display:none">
                                    <span class="xw_span"><img src="<?php echo $showimage.$v['img']; ?>" /></span>
                                    <span class="xw_neirong">
                                        <div class="xw_no1">
                                            <ul>
                                                <li class="cw_abcName"><?php echo $v['title'];?></li>
                                                <li class="cw_abcnoct"> <?php echo $v['summary'];?></li>
                                                  <a href="<?php echo U('News/detail',array('nid'=>$v['id'])); ?>">
                                                <li class="cw_gengduo">Learn More >></li>  
                                                </a>
                                            </ul>
                                        </div>       	
                                    </span>
                            </li>
                          
                 <?php  } endforeach; ?>
                 
                 
                </ul>
            </div>
        </div>
		<div class="xw_chanpin">
        	<div class="xw_xw1">
            	<ul>
                	<li class="xw_Name">学科竞赛<span class="xw_gd">
                	 <a href="<?php echo U('Subjectrace/index'); ?>">
                	Learn More >>
                	</a>
                	</span></li>
                     <?php foreach($srs as $k=>$v): if($k==0){ ?>
                     
                    <div class="cp_abc" id="div<?php echo $k; ?>" style="display:block">
                    	<ul>
                        	<li><span class="cp_abcimag"><img width="100px" height="100px" src="<?php echo $showimage.$v['smallimg']; ?>" /></span></li>
                            <li>
								<div class="cp_name">
                                	<ul>
                                    	<li class="cp_abcName"><?php echo $v['racename']; ?></li>
                                        <li class="cp_abcnoct"> <?php echo $v['summary']; ?></li>
                                        <a href="<?php echo U('Subjectrace/detail',array('sid'=>$v['id'])); ?>">
                                        <li class="cp_gengduo">Learn More >></li>
                                        </a>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <?php }else{ ?>
                    
                      <div class="cp_abc" id="div<?php echo $k; ?>" style="display:none">
                    	<ul>
                        	<li><span class="cp_abcimag"><img width="100px" height="100px" src="<?php echo $showimage.$v['smallimg']; ?>" /></span></li>
                            <li>
								<div class="cp_name">
                                	<ul>
                                    	<li class="cp_abcName"><?php echo $v['racename']; ?></li>
                                        <li class="cp_abcnoct"> <?php echo $v['summary']; ?></li>
                                         <a href="<?php echo U('Subjectrace/detail',array('sid'=>$v['id'])); ?>">
                                        <li class="cp_gengduo">Learn More >></li>
                                        </a>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                      <?php
 } endforeach; ?>
                 
                    
                    <li class="cp_lrixin">
                    	<div class="cp_neixin">
                        	<ul>
                        	   <?php foreach($srs as $k=>$v): ?>
                            	<li><a href="<?php echo U('Subjectrace/detail',array('sid'=>$v['id'])); ?>" onMouseMove="toggle('<?php echo $k; ?>')">
                            	
                            	<?php echo $v['racename']; ?></a></li>
                               <?php endforeach; ?>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="xw_lianxi">
        	<img src="__PUBLIC__/images/4556.gif" />
        </div>
		<div class="xw_lxTel">
        	<div class="xw_lxName">
            		<ul>
                    	<li class="lx_nameA">
                    	 <a href="<?php echo U('About/contactus'); ?>">
                    	咨询热线
                    	</a>
                    	</li>
                        <li class="lx_nameB">
                        	<font color="#333333" size="2">热线 ：</font><font  size="2">0592 123456</font><p>
                            <font color="#333333" size="2">传真 ：</font><font  size="2">0592 123456</font><p>
                            <font color="#333333" size="2">邮件 ：</font><font  size="2">0592@163.com</font><p>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
    <script language="JavaScript" type="text/JavaScript">
 function toggle(targetid){
 	document.getElementById("div"+targetid).style.display="block";        
 	for(var i =0;i<=4;i++){
		if(targetid != i){
			document.getElementById("div"+i).style.display="none";
		}
	}
 }
 </script>	 
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
<script type="text/javascript"> 
	function blurtitle(v){ //鼠标滑过显示内容方法
		for(var i=0;i<5;i++){ //以3个标题举例
			if("title"+i == v.id){ //当前循环的i如果是正确的标题，将内容的display设为block，即显示
				document.getElementById("content"+i).style.display = "block";
			}else{ //当前循环的i是其他标题，将内容设为none，即隐藏
				document.getElementById("content"+i).style.display = "none"; 
			}
		}
	}
	
	
</script>
<SCRIPT src="__PUBLIC__/lib/jquery.bxslider.min.js" type=text/javascript></SCRIPT>
<script type="text/javascript">
$('.bxslider1').bxSlider({
  auto:true,
  infiniteLoop: true,
  hideControlOnEnd: true
});
</script>

</body>
</html>
   
      
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