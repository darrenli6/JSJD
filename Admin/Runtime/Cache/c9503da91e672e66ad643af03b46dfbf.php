<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title><?php echo ($title); ?></title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
	<script type="text/javascript" src='__PUBLIC__/Js/jquery-1.8.2.min.js'></script>
	<script type="text/javascript" src='__PUBLIC__/Js/common.js'></script>
</head>
<body>


<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /> 
	<div class='status'>
		<span><?php echo ($title); ?></span>
	</div>
	<form action="__SELF__" method='post'>
		<table class="table">
		<input type="hidden" name="id" value="<?php echo ($PData["id"]); ?>" />
			<tr>
				<td width='40%' align='right'>党员活动名称：</td>
				<td>
					<input type="text" name='title' value="<?php echo ($PData["title"]); ?>"/>
				</td>
			</tr>
			 <tr>
				<td width='40%' align='right'>开始时间：</td>
				<td>
			     <input type="text" name="starttime" readonly="readonly"   value="<?php echo ($PData["starttime"]); ?>" id="starttime" value="" />
                    </td> 
				</td>
			</tr>
			
			   <tr>
				<td width='40%' align='right'>结束时间：</td>
				<td>
			      <input type="text" name="endtime" readonly="readonly"  id="endtime"  value="<?php echo ($PData["endtime"]); ?>" />
                    </td> 
				</td>
			</tr>
			
		   <tr>
				<td width='40%' align='right'>党员活动文件：</td>
				<td>
					 <input  type="file"    id="attachfile" />
					 <span style="color:red;">*请上传doc,docx格式的文件</span>
                     <div class="showfile">
                     <input type="text" readonly="readonly" name="attachfile" value="<?php echo ($PData["attachfile"]); ?>" />
	                 </div>
	 			</td>
			</tr>
			  <tr>
				<td width='40%' align='right'>缩略图：</td>
				<td>
					 <input  type="file"     id="smallimg" />
					 <span style="color:red;">*请上传png,jpeg,jpg,gif格式的图片</span>
                     <div class="showimg">
                     <img  width="120px" height="120px" src="<?php echo ($path); echo ($PData["smallimg"]); ?>"  />
                     <input type="hidden" name="smallimg" value="<?php echo ($PData["smallimg"]); ?>" />
	                 </div>
	 			</td>
			</tr>
		     	<tr>
				<td width='40%' align='right'>备注信息：</td>
				<td>
			  
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
			    <textarea id="content" cols="40" rows="6" name="content"><?php echo ($PData["content"]); ?></textarea>
                    </td> 
				 
			</tr>
			<tr>
				<td colspan='2'>
					<input type="submit"  value='保存添加' class='big-btn'/>
				</td>
			</tr>
		</table>
	</form>
<script>
  var FILEURL="<?php echo U('Partyactivity/handlerfile');?>";
  var IMAGEURL="<?php echo U('Partyactivity/handlerimage');?>";
</script>
<!-- 引入时间插件 -->
<script type="text/javascript" src="__PUBLIC__/time_plugin/js/jquery-1.11.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/time_plugin/css/jquery-ui.css" />
<script type="text/javascript" src="__PUBLIC__/time_plugin/js/jquery-ui-1.10.4.custom.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/time_plugin/js/jquery.ui.datepicker-zh-CN.js"></script>
<script type="text/javascript" src="__PUBLIC__/time_plugin/js/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript" src="__PUBLIC__/time_plugin/js/jquery-ui-timepicker-zh-CN.js"></script>
<script type="text/javascript">
$( "input[name='starttime'],input[name='endtime']" ).datetimepicker();
</script>
<!--导入在线编辑器 -->
<link href="__PUBLIC__/umeditor1_2_2-utf8-php/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<script type="text/javascript" charset="utf-8" src="__PUBLIC__/umeditor1_2_2-utf8-php/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="__PUBLIC__/umeditor1_2_2-utf8-php/umeditor.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/umeditor1_2_2-utf8-php/lang/zh-cn/zh-cn.js"></script>
<script>
UM.getEditor('content', {
	initialFrameWidth : "80%",
	initialFrameHeight : 350,
	scaleEnabled:true
});
</script>	

<script type="text/javascript" src="__PUBLIC__/Js/uploadpartyactifile.js"></script> 
<script type="text/javascript" src="__PUBLIC__/Js/uploadpartyactiimage.js"></script> 
 

<script>
var SHOWIMAGE="/JSJD/Public/Upload/";
</script>
</body>
</html>