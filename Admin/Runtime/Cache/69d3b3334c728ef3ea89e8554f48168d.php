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
		<span>修改密码</span>
	</div>
	<form action="__SELF__" method='post'>
		<table class="table">
			<tr>
				<td width='45%' align='right'>旧密码：</td>
				<td>
					<input type="password" name='old'/>
				</td>
			</tr>
			<tr>
				<td align='right'>新密码：</td>
				<td>
					<input type="password" name='pwd'/>
				</td>
			</tr>
			<tr>
				<td align='right'>确认密码：</td>
				<td>
					<input type="password" name='pwded'/>
				</td>
			</tr>
			<tr>
				<td colspan='2'>
					<input type="submit" value='保存修改' class='big-btn'/>
				</td>
			</tr>
		</table>
	</form>