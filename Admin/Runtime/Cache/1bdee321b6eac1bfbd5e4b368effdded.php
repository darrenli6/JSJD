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
		    <input type="hidden" name='id' value="<?php echo ($PData["id"]); ?>"/>
			<tr>
				<td width='45%' align='right'>新闻分类名称：</td>
				<td>
					<input type="text" name='name' value="<?php echo ($PData["cat_name"]); ?>"/>
				</td>
			</tr>
	        <tr>
				<td width='45%' align='right'>新闻分类说明：</td>
				 
				<td>
				    <textarea rows="6" cols="30" name="cat_info"><?php echo ($PData["cat_info"]); ?></textarea>
				</td>
			</tr>
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
var SHOWIMAGE="/JSJD/Public/Upload/";
</script>
</body>
</html>