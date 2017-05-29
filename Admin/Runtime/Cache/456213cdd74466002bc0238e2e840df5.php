<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="__PUBLIC__/css/ch-ui.admin.css">
	<link rel="stylesheet" href="__PUBLIC__/font/css/font-awesome.min.css">
    <script type="text/javascript">
    var SHOWIMAGE="/JSJD/Public/Upload/";
    </script>
</head>
<body>
    
 
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /> 
	<div class='status'>
		<span><?php echo ($title); ?></span>
	</div>
	<form action="__SELF__" method='post'>
		<table class="table">
			<tr>
				<td width='40%' align='right'>党员活动名称：</td>
				<td>
					<input type="text" name='title'/>
				</td>
			</tr>
			 <tr>
				<td width='40%' align='right'>开始时间：</td>
				<td>
			     <input type="text" name="starttime" readonly="readonly" id="starttime" value="" />
                    </td> 
				</td>
				
				<br />
				<br />
			</tr>
			
			   <tr>
				<td width='40%' align='right'>结束时间：</td>
				<td>
			      <input type="text" name="endtime" readonly="readonly"  id="endtime" value="" />
                    </td> 
				</td>
				
				<br />
				<br />
			</tr>
			
		   <tr>
				<td width='40%' align='right'>党员活动文件：</td>
				<td>
					 <input  type="file"    id="attachfile" />
					 <span style="color:red;" >*请上传pdf格式的文件</span>
                     <div class="showfile">
                     
	                 </div>
	                  <span id="notification" style="color:red;"></span>
	 			</td>
			</tr>
			  <tr>
				<td width='40%' align='right'>缩略图：</td>
				<td>
					 <input  type="file"     id="smallimg" />
					 <span style="color:red;">*请上传png,jpeg,jpg,gif格式的图片</span>
                     <div class="showimg">
                     
	                 </div>
	 			</td>
			</tr>
			  <tr>
				<td width='40%' align='right'>简介：</td>
				<td>
				<textarea name="summary" rows="6" cols="40">
				</textarea>
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
			    <textarea id="content" cols="40" rows="6" name="content"></textarea>
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
  var EditName='content';
</script>
<!-- 引入时间插件 -->
 <script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-1.8.2.min.js'></script>
<link href="__ROOT__/Public/datetimepicker/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" charset="utf-8" src="__ROOT__/Public/datetimepicker/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" charset="utf-8" src="__ROOT__/Public/datetimepicker/datepicker-zh_cn.js"></script>
<link rel="stylesheet" media="all" type="text/css" href="__ROOT__/Public/datetimepicker/time/jquery-ui-timepicker-addon.min.css" />
<script type="text/javascript" src="__ROOT__/Public/datetimepicker/time/jquery-ui-timepicker-addon.min.js"></script>
<script type="text/javascript" src="__ROOT__/Public/datetimepicker/time/i18n/jquery-ui-timepicker-addon-i18n.min.js"></script>


<script type="text/javascript">
$( "input[name='starttime'],input[name='endtime']" ).datetimepicker(); ;
</script>
 
<!--导入在线编辑器 -->

<!--导入在线编辑器 -->
	<!-- 配置文件 -->
    <script type="text/javascript" src="__ROOT__/Public/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="__ROOT__/Public/utf8-php/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor(EditName);
    </script>	

<script type="text/javascript" src="__PUBLIC__/Js/uploadpartyactifile.js"></script> 
<script type="text/javascript" src="__PUBLIC__/Js/uploadpartyactiimage.js"></script>