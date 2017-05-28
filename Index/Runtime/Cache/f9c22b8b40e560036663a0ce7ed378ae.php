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
            <li class="top_dh"><a href="<?php echo U('News/index'); ?>">党员会议</a>
          
            </li>
            
            <li class="top_dh"><a href="<?php echo U('News/index'); ?>">新闻列表</a>
           
            </li>
             <li class="top_dh"><a href="<?php echo U('About/index'); ?>">关于我们</a></li>
             <li class="top_dh"><a href="<?php echo U('About/contactus'); ?>">联系我们</a></li>
            <li class="top_dh"><a href="About/rlzy.html">投诉建议</a>


            
        </ul>
	  </div>
      
      
      
      
<div id="big_wrapper">
	
<!--轮换图调用-->
<!---->    
    <div class="top_luhuan">
		<div id="banner">
		  <ul class="bxslider1">
		  
		    <?php foreach($rotatedata as $k=>$v): ?>
			<li><img  src="__ROOT__/Public/rotate/<?php echo $v['cvalue'];?>" alt=""  /></li>
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
                	<li class="xw_Name">新闻动态<span class="xw_gd">Learn More >></span></li>   	
                    <?php foreach($newses as $k=>$v): if($k==0){ ?>  
                    <li class="xw_liebiao" onmouseover="javascript:blurtitle(this)" id="title<?php echo $v['id'] ?>">
                    <a href=""><?php echo $v['title'];?></a>
                    <span><?php echo $v['publictime'] ?></span></li>
                            <li class="xw_images" id="content<?php echo $v['id'] ?>" style="display:block">
                                    <span class="xw_span"><img src="<?php echo $showimage.$v['img']; ?>" /></span>
                                    <span class="xw_neirong">
                                        <div class="xw_no1">
                                            <ul>
                                                <li class="cw_abcName"><?php echo $v['title'];?></li>
                                                <li class="cw_abcnoct"> <?php echo $v['summary'];?></li>
                                                <li class="cw_gengduo">Learn More >></li>  
                                            </ul>
                                        </div>       	
                                    </span>
                            </li>
                      <?php }else{ ?>  
                         
                               <li class="xw_liebiao" onmouseover="javascript:blurtitle(this)" id="title<?php echo $v['id'] ?>">
                    <a href=""><?php echo $v['title'];?></a>
                    <span><?php echo $v['publictime'] ?></span></li>
                            <li class="xw_images" id="content<?php echo $v['id'] ?>" style="display:none">
                                    <span class="xw_span"><img src="<?php echo $showimage.$v['img']; ?>" /></span>
                                    <span class="xw_neirong">
                                        <div class="xw_no1">
                                            <ul>
                                                <li class="cw_abcName"><?php echo $v['title'];?></li>
                                                <li class="cw_abcnoct"> <?php echo $v['summary'];?></li>
                                                <li class="cw_gengduo">Learn More >></li>  
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
                	<li class="xw_Name">学科竞赛<span class="xw_gd">Learn More >></span></li>
                     <?php foreach($srs as $k=>$v): if($k==0){ ?>
                     
                    <div class="cp_abc" id="div<?php echo $v['id']; ?>" style="display:block">
                    	<ul>
                        	<li><span class="cp_abcimag"><img width="100px" height="100px" src="<?php echo $showimage.$v['smallimg']; ?>" /></span></li>
                            <li>
								<div class="cp_name">
                                	<ul>
                                    	<li class="cp_abcName"><?php echo $v['racename']; ?></li>
                                        <li class="cp_abcnoct"> <?php echo $v['summary']; ?></li>
                                        <li class="cp_gengduo">Learn More >></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <?php }else{ ?>
                    
                      <div class="cp_abc" id="div<?php echo $v['id']; ?>" style="display:none">
                    	<ul>
                        	<li><span class="cp_abcimag"><img width="100px" height="100px" src="<?php echo $showimage.$v['smallimg']; ?>" /></span></li>
                            <li>
								<div class="cp_name">
                                	<ul>
                                    	<li class="cp_abcName"><?php echo $v['racename']; ?></li>
                                        <li class="cp_abcnoct"> <?php echo $v['summary']; ?></li>
                                        <li class="cp_gengduo">Learn More >></li>
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
                            	<li><a href="/" onMouseMove="toggle('<?php echo $v['id']; ?>')">
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
                    	<li class="lx_nameA">咨询热线</li>
                        <li class="lx_nameB">
                        	<font color="#333333" size="2">热线 ：</font><font  size="2">0592 123456</font><p>
                            <font color="#333333" size="2">传真 ：</font><font  size="2">0592 123456</font><p>
                            <font color="#333333" size="2">邮件 ：</font><font  size="2">0592@163.com</font><p>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
   
      
<!--底部-->   

<!-- -->   
    
    
    <div class="Under">
    		<ul>
            	<li class="Ur_dizhi">版权所有(2017)长治学院计算机系</li>
                <li class="Ur_caidan">
                		<div class="Ur_cd">
                        	<ul>
                        		<li><a href="">人才招聘</a></li>
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