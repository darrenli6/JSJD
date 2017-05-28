<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="__PUBLIC__/css/ch-ui.admin.css">
	<link rel="stylesheet" href="__PUBLIC__/font/css/font-awesome.min.css">
    
</head>
<body>
    
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /> 
	<div class='status'>
		<span><?php echo ($title); ?></span>
	</div>
	<form action="__SELF__" method='post'>
		<table class="table">
			<tr>
				<td width='45%' align='right'>党员角色：</td>
				<td>
					<input type="text" name='rolename'/>
				</td>
			</tr>
		   <tr>
				<td width='45%' align='right'>党员角色说明：</td>
				<td>
					<textarea id="context" cols="40" rows="6" name="rolecontent"></textarea>
				</td>
			</tr>
		 
			<tr>
				<td colspan='2'>
					<input type="submit" value='保存添加' class='big-btn'/>
				</td>
			</tr>
		</table>
	</form>