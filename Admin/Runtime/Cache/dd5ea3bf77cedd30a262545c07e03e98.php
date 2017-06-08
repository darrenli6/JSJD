<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title><?php echo ($title); ?></title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
	<script type="text/javascript" src='__PUBLIC__/Js/jquery-1.8.2.min.js'></script>
	<script type="text/javascript" src='__PUBLIC__/Js/common.js'></script>
</head>
<body>
	<div class='status'>
		<span>网站前台配置</span>
	</div>
	<form action="<?php echo U('runEditSite');?>" method='post'>
		<table class="table">
			<tr>
				<td width='45%' align='right'>联系方式：</td>
				<td>
					<input type="text" name='telephone' value='<?php echo ($config["TELEPHONE"]); ?>'/>
				</td>
			</tr>
			 	<tr>
				<td width='45%' align='right'>传真：</td>
				<td>
					<input type="text" name='fox' value='<?php echo ($config["FOX"]); ?>'/>
				</td>
			</tr>
			 	<tr>
				<td width='45%' align='right'>地址：</td>
				<td>
					<input type="text" name='address' value='<?php echo ($config["ADDRESS"]); ?>'/>
				</td>
			</tr>
			 	<tr>
				<td width='45%' align='right'>邮箱：</td>
				<td>
					<input type="text" name='email' value='<?php echo ($config["EMAIL"]); ?>'/>
				</td>
			</tr>
			 	<tr>
				<td width='45%' align='right'>网站url：</td>
				<td>
					<input type="text" name='web_site' value='<?php echo ($config["WEB_SITE"]); ?>'/>
				</td>
			</tr>
			<tr>
				<td colspan='2'>
					<input type="submit" value='保存修改' class='big-btn'/>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>