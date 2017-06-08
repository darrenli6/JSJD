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
		<span>后台皮肤</span>
	</div>
	<form action="__SELF__" method='post'>
		<table class="table">
			<tr>
				<td align='right'>皮肤模板：</td>
				<td height='30'>
					<input type="radio" name='default_theme' value='default' class='radio' 
                     <?php if($config['DEFAULT_THEME']=='default'): ?>
                     checked='checked' 
                     <?php endif; ?>
                     />&nbsp;皮肤模板A&nbsp;&nbsp;
					<input type="radio" name='default_theme' value='theme' class='radio'
					 <?php if($config['DEFAULT_THEME']=='theme'): ?>
                     checked='checked' 
                     <?php endif; ?>
					/>&nbsp;皮肤模板B
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