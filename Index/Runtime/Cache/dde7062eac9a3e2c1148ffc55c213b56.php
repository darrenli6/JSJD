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
    
    
    
    ‘<meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width">
    <title>公交线路查询</title>
    <link rel="stylesheet" href="http://cache.amap.com/lbs/static/main.css?v=1.0"/>
     <script type="text/javascript"
       src="http://webapi.amap.com/maps?v=1.3&key=95874d8ff8cb988804b924431ae3543b"></script>
<div id="big_wrapper">
	
     <style type="text/css">
#mapContainer{
  width:800px;
  height:400px;
  position:relative;
}
#panel {
            position: absolute;
            background-color: white;
            max-height: 80%;
            overflow-y: auto;
            top: 900px;
            right: 250px;
            width: 200px;
            border: solid 1px silver;
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
     <script> 
function show(c_Str) 
{if(document.all(c_Str).style.display=='none') 
{document.all(c_Str).style.display='block';} 
else{document.all(c_Str).style.display='none';}} 


</script>
 <div class="top_gywm">
	<ul>
            	<li class="cpzx_left">
                	<div class="gywm_liebiao">
                    	<ul>
                        	<li class="gywm_lbname"><span class="spa">联系我们</span><span class="spb">adout us</span></li>
                            <li class="gywm_lb">
                            	<div>
                                	<ul>
                                	<li><a href="<?php echo U('About/contactus');?>"  >联系我们</a></li>
                                    <li><a href="<?php echo U('Feedback/index');?>" >意见反馈</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                </li>

               <li class="cpzx_right" id="div1" style="display:block">
               		<div class="gywm_xp"></div>
						<div class="gywm_rightName">
							<ul>
								<li class="gyName">联系我们<span>company profil</span></li>
								<li class="gyyou"></li>
							</ul>
						</div>
                      <div class="lxwmjs">
                   		<p><img  src="__PUBLIC__/images/lxwm2.png" alt="" /></p>
								<br />
                                <br />
                            <font size="4">长治学院计算机系</font><br />
                             <br />
                            咨询热线：  4000 580 100<br />
                            网址(Web)： www.czxy.net <br />      
                             
                            
                            客服邮箱：  darren94me@gmail.com<br />
                            地址：  长治市城北东街73号
                      </div>
                                 <!--  地图 容器-->
                            <div id="mapContainer"></div>

                                  <!--  地图 结束-->
               </li> 
               
                <li class="cpzx_right" id="div2" style="display:none">
               		<div class="gywm_xp"></div>
						<div class="gywm_rightName">
							<ul>
								<li class="gyName">意见反馈<span>company profil</span></li>
								<li class="gyyou"></li>
							</ul>
						</div>
                      <div class="lxwmly">
                   				<ul>
                                	<form action="" name="form1">
                                	<p><font color="#FF0000">*</font>&nbsp;&nbsp;请留下您的意见和建议，帮助我们做得更好：)</p>
                                	<li class="js_jy"><textarea type="text" name="jy"></textarea></li>
                                    <p>联系Email</p>
                                    <li class="js_Email"><input type="text" name="email" dataType="email[1,]"  style="width:500px; height:30px;" /></li>
                                    <p>联系电话</p>
                                    <li class="js_Tel"><input  type="text"  style="width:500px; height:30px;"></li>
                                    
                                    <li class="js_tjcz"><input name="" value="提 交" type="submit" /> &nbsp;&nbsp;&nbsp;&nbsp;<input name="" value="重 置" type="reset" /></li>
                                    </form>
                                    <li class="js_tjcz"><font size="2">说明：*为必填项，请填写完整。填写E-mail或者联系电话方便我们及时给您回复，此信息不公开仅限客户联络，请放心。</font></li>
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
 	for(var i =1;i<=3;i++){
		if(targetid != i){
			document.getElementById("div"+i).style.display="none";
		}
	}
 }
 </script>	    
<SCRIPT src="../js/jquery.bxslider.min.js" type=text/javascript></SCRIPT>
<script type="text/javascript">
$('.bxslider1').bxSlider({
  auto:true,
  infiniteLoop: true,
  hideControlOnEnd: true
});
</script>

<div id="panel">
   出发地<input type="text" id="start"  value="火车站"/><br />
   目的地<input type="text" id="end"   value="长治学院" />
     <input type="button" onclick="getData();" value="确定" />
     <input type="button" onclick="javascript:location.href='<?php echo U('index'); ?>'" value="返回" />
     <div id="result"  align="left">
     
     </div>
  </div>
     
  
<script type="text/javascript">
 
   
    var map = new AMap.Map("mapContainer", {
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
</script>
 <script type="text/javascript" src="http://webapi.amap.com/demos/js/liteToolbar.js"></script>

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