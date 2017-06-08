<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title><?php echo ($title); ?></title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />

</head>
<body>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-1.8.2.min.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-1.7.2.min.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-validate.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/common.js'></script> 

 
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /> 
	<div class='status'>
		<span><?php echo ($title); ?></span>
	</div>
	<form action="__SELF__" method='post'>
		<table class="table">
			<tr>
				<td width='40%' align='right'>名称：</td>
				<td>
					<input type="text" name='racename'/>
				</td>
			</tr>
			 <tr>
				<td width='40%' align='right'>开始时间：</td>
				<td>
			     <input  name="racetime" readonly="readonly" id="racetime" value="" />
                    </td> 
				</td>
			</tr>
			
			   <tr>
				<td width='40%' align='right'>结束时间：</td>
				<td>
			      <input name="endtime" readonly="readonly"  id="endtime" value="" />
                    </td> 
				</td>
			</tr>
			 
			 
		   <tr>
				<td width='40%' align='right'>竞赛缩略图：</td>
				<td>
					 <input  type="file"   id="uploadlogo" />
					 <span style="color:red;">*请上传png,jpeg,jpg,gif格式的图片</span>
                     <div class="showimg">
                     
	                 </div>
	 			</td>
			</tr>
		     
			 
		   <tr>
				<td width='40%' align='right'>部门组织：</td>
				<td>
				<?php if(is_array($DData)): foreach($DData as $key=>$v): ?><input type="checkbox" name="deds[]" value="<?php echo ($v["id"]); ?>" ><?php echo ($v["departname"]); endforeach; endif; ?>
	 			</td>
			</tr>
		     
			  <tr>
				<td width='40%' align='right'>简介：</td>
				<td>
				  
				 <textarea name="summary" rows="10" cols="40"></textarea>
	 			</td>
			</tr>
			<tr>
				<td width='40%' align='right'>竞赛信息：</td>
				<td>
			 
				 
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
			    <textarea id="context" cols="40" rows="6" name="racecontent"></textarea>
                    </td> 
				 
			</tr>
			
			
			  
			<tr>
				<td colspan='2'>
					<input type="submit" value='保存添加' class='big-btn'/>
				</td>
			</tr>
		</table>
	</form>
<script>
  var IMAGEURL="<?php echo U('Subjectrace/handlerimage');?>";
  
</script>
<!-- 引入时间插件 -->
<script type="text/javascript" src="__PUBLIC__/time_plugin/js/jquery-1.11.0.min.js"></script>
 
<link rel="stylesheet" type="text/css" href="__PUBLIC__/time_plugin/css/jquery-ui.css" />
<script type="text/javascript" src="__PUBLIC__/time_plugin/js/jquery-ui-1.10.4.custom.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/time_plugin/js/jquery.ui.datepicker-zh-CN.js"></script>
<script type="text/javascript" src="__PUBLIC__/time_plugin/js/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript" src="__PUBLIC__/time_plugin/js/jquery-ui-timepicker-zh-CN.js"></script>
<script type="text/javascript">
$( "input[name='racetime'],input[name='endtime']" ).datetimepicker();
</script>
<script type="text/javascript" src="__PUBLIC__/Js/uploadraceimage.js"></script> 
<!--导入在线编辑器 -->
<link href="__PUBLIC__/umeditor1_2_2-utf8-php/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<script type="text/javascript" charset="utf-8" src="__PUBLIC__/umeditor1_2_2-utf8-php/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="__PUBLIC__/umeditor1_2_2-utf8-php/umeditor.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/umeditor1_2_2-utf8-php/lang/zh-cn/zh-cn.js"></script>
<script>
UM.getEditor('context', {
	initialFrameWidth : "80%",
	initialFrameHeight : 350,
	scaleEnabled:true
});
</script>	
 
 
<script>
var SHOWIMAGE="/JSJD/Public/Upload/";
</script>
</body>
</html>