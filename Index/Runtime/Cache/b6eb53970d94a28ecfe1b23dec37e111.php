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
                            	<?php if(empty($sessionid)){ ?>
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
           		<?php foreach($departinfo as $k=>$v): ?>
                	<li><a href="<?php echo U('Subjectrace/index',array('did'=>$v['id'])); ?>"><?php echo $v['departname']; ?></a></li>
                  
                <?php endforeach; ?>
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
            	<li class="cpzx_left">
                	<div class="gywm_liebiao">
                    	<ul>
                        	<li class="gywm_lbname"><span class="spa">组织者</span><span class="spb">origination</span></li>
                            <li class="gywm_lb">
                            	<div>
                                	<ul>
                                	<?php foreach($dData as $k=>$v): ?>
                                	<li><a onClick="toggle('<?php echo $v['id']; ?>','<?php echo $v['departname'] ?>')" ><?php echo $v['departname']; ?></a></li>
                                <?php endforeach; ?>   
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
								<li class="gyName">竞赛<span>近况</span></li>
								<li class="gyyou"></li>
							</ul>
						</div>
               		<div class="cpzx_rightCP">
                    	
                        <ul class="qikan_list" id="subresult">
                         <?php foreach($sData as $k=>$v ):?>
                          <li class="imghover"><a href="<?php echo U('detail',array('sid'=>$v['id']));?>" target="_blank" title="<?php echo $v['racename']; ?>">
                          <img src="<?php echo C('SHOWIMAGE').$v['smallimg']; ?>" alt="<?php echo $v['racename']; ?>"/></a>
                            <div class="fix intro">
                              <div class="l t"><?php echo $v['racename']; ?></div>
                              <p class="p"><?php echo $v['summary']; ?>...</p>
                            </div>
                            <a href="<?php echo U('detail',array('sid'=>$v['id']));?>" target="_blank" title="<?php echo $v['racename']; ?>">
                            <div  class="info">更多...</div>
                            </a>
                          </li>
                         <?php endforeach;?>
                          
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
<SCRIPT src="../js/jquery.bxslider.min.js" type=text/javascript></SCRIPT>
<script type="text/javascript">
$('.bxslider1').bxSlider({
  auto:true,
  infiniteLoop: true,
  hideControlOnEnd: true
});


function toggle(targetid,departname){
	 var html='';
	 
	$.ajax({
		url:"<?php echo U('Subjectrace/ajaxLoadSub'); ?>",
		data:{'targetid':targetid},
		type:'post',
		dataType:'json',
		'success':function(msg){
		  
			if(msg.state==1){
			var data=msg.data;	
            var detailurl="<?php echo U('detail'); ?>";
            var srcimg="<?php echo C('SHOWIMAGE') ?>";
           // console.log(data[1]['id']);
			for(k in data){
               html+='<li class="imghover"><a href="'+detailurl+'/sid/'+data[k]['id']+'" target="_blank" title="'+data[k]['racename']+'">';
               html+='<img src="'+srcimg+data[k]['smallimg']+'" alt="'+data[k]['racename']+'"/></a>';
               html+= '<div class="fix intro">';
               html+= '<div class="l t">'+data[k]['racename']+'</div>';
               html+='   <p class="p">'+data[k]['summary']+'...</p>';
                html+='  </div><a href="'+detailurl+'/sid/'+data[k]['id']+'" target="_blank" title="'+data[k]['racename']+'">';
                html+='<div  class="info">更多...</div>';
                	  html+='   </a>';
                		  html+='</li>';
			}
	 
			$('#subresult').html(html);	
				
			}
		},
	}); 

}
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
                                <li class="Ur_cdA"><a href="<?php echo U('About/contactus'); ?>">网站地图</a></li>
                                
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