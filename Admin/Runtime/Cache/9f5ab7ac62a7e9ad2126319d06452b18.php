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
		<input type="hidden" name="id" value="<?php echo ($QData["id"]); ?>" />
		<table class="table">
		
			<tr>
				<td width='45%' align='right'>名称：</td>
				<td>
					<input type="text" name='qualityname' value="<?php echo ($QData["qualityname"]); ?>"/>
				</td>
			</tr>
		   <tr>
				<td width='45%' align='right'>满分：</td>
				<td>
					<input type="text" name='fullstore' value="<?php echo ($QData["fullstore"]); ?>"/>
				</td>
			</tr>
		    <tr>
				<td width='45%' align='right'>备注信息：</td>
				<td>
			  <textarea id="context" cols="40" rows="6" name="qualityinfo"><?php echo ($QData["qualityinfo"]); ?></textarea>
				</td>
			</tr>
			<tr>
				<td colspan='2'>
					<input type="submit" value='保存添加' class='big-btn'/>
				</td>
			</tr>
		</table>
	</form>
 
<!--导入在线编辑器 -->
<link href="__PUBLIC__/umeditor1_2_2-utf8-php/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<script type="text/javascript" charset="utf-8" src="__PUBLIC__/umeditor1_2_2-utf8-php/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="__PUBLIC__/umeditor1_2_2-utf8-php/umeditor.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/umeditor1_2_2-utf8-php/lang/zh-cn/zh-cn.js"></script>
<script>
UM.getEditor('context', {
	initialFrameWidth : "80%",
	initialFrameHeight : 350
});
</script>

<script>
var SHOWIMAGE="/JSJD/Public/Upload/";
</script>
</body>
</html>