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
    
    
    
     
<div id="big_wrapper">
 
	<div id="News">
			<ul class="top_News">
				<li class="News_left">
				<div class="gywm_liebiao">
                    	<ul>
                        	<li class="gywm_lbname"><span class="spa">新闻中心 </span><span class="spb">News</span></li>
                            <li class="gywm_lb">
                            	<div>
                                	<ul>
                                	<?php foreach($newsCat as $k=>$v ):?>
                                	<li><a href="#" onClick="toggle('<?php echo $v['id']; ?>','<?php echo $v['cat_name'] ?>')">
                                	<?php echo $v['cat_name'] ?></a></li>
                                 <?php endforeach; ?>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
					 
				</li>
				<li class="News_right" id="div1" style="display:block">
						<div class="gywm_xp"></div>
						<div class="gywm_rightName">
							<ul>
								<li class="gyName">新闻汇总<span>News</span></li>
								<li class="gyyou"></li>
							</ul>
						</div>
						<div class="News_right_xw">
								<div class="News_xinwen">
									<ul>
										<li class="News_xwimages"><img src="<?php echo C('SHOWIMAGE').$newsData[0]['img']; ?>" height="160px" /></li>
										<li class="News_xwneirong">
											<div>
												<ul>
													<li class="xwmingc"><a href="<?php echo U('News/detail',array('nid'=>$newsData[0]['id'])); ?>">标题：<?php echo $newsData[0]['title']; ?></a></li>
													<li class="xwshijian">日期：<?php echo $newsData[0]['publictime']; ?></li>
													<li class="xwneirong"><?php echo $newsData[0]['summary']; ?>...</li>
													<li class="xwxiangqing"><a href="<?php echo U('News/detail',array('nid'=>$newsData[0]['id'])); ?>">详情</a></li>
												</ul>
											</div>
										</li>
									</ul>								
								</div>
								
								<div class="newslist">
									<ul>
									  <li>
									  <?php foreach($newsData as $k=>$v): if($k==0) continue; ?>
										<div><a href="<?php echo U('News/detail',array('nid'=>$v['id'])); ?>"><?php echo $v[title]; ?></a></div>
										<span><?php echo $v['publictime']; ?></span>
										<?php endforeach; ?>
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
var showimagepath   = '<?php echo C('SHOWIMAGE'); ?>';
var detailurl       ="<?php echo U('News/detail'); ?>";
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
 function toggle(targetid,cat_name){
	 var html='';
	 
	$.ajax({
		url:"<?php echo U('News/ajaxGetNewsByCat'); ?>",
		data:{'targetid':targetid},
		type:'post',
		dataType:'json',
		'success':function(msg){
			if(msg.status){
			var data=msg.data;	
			 
    html+='<div class="gywm_xp"></div>';
    html+='	<div class="gywm_rightName">';
	html+='		<ul>';
	html+='			<li class="gyName">'+cat_name+'<span>News</span></li>';
	html+='			<li class="gyyou"></li>';
	html+='		</ul>';
	html+='	</div>';
	html+='	<div class="News_right_xw">';
	html+='			<div class="News_xinwen">';
	html+='			<ul>';
	html+='				<li class="News_xwimages"><img src="'+showimagepath+data[0]['img']+'" height="160px" /></li>';
	html+='<li class="News_xwneirong">';
	html+='								<div>';
	html+='								<ul>';
	html+='									<li class="xwmingc"><a href="'+detailurl+'/nid/'+data[0]['id']+'">标题：'+data[0]['title']+'</a></li>';
	html+='								<li class="xwshijian">日期：'+data[0]['publictime']+'</li>';
	html+='								<li class="xwneirong">'+data[0]['summary']+'..</li>';
	html+='							<li class="xwxiangqing"><a href="'+detailurl+'/nid/'+data[0]['id']+'">详情</a></li>';
    html+='						</ul>';
    html+='					</div>';
    html+='				</li>';
	html+='			</ul>	';							
	html+='	</div>';
						
	html+='	<div class="newslist">';
	html+='	<ul>';
	html+='		  <li>';
							  for(k in data){
                                if(k==0) continue;
                                
    html+='							<div><a href="'+detailurl+'/nid/'+data[k]['id']+'">'+data[k]['title']+'</a></div>';
    html+='                          <span>'+data[k]['publictime']+' </span>';
							  }
    html+='</ul>';
    	html+='				</div>	';
			$('#div1').html(html);	
				
			}
		},
	}); 
 
 }
 </script>	
<SCRIPT src="../js/jquery.bxslider.min.js" type=text/javascript></SCRIPT>
 
 
 
      
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