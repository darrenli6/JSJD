<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
 	<link rel="stylesheet" href="__PUBLIC__/UserCenter/css/reset.css" />
	<link rel="stylesheet" href="__PUBLIC__/UserCenter/css/content.css" />
</head>
<body marginwidth="0" marginheight="0">
	<div class="container">
		<div class="public-nav">您当前的位置：<a href="">党员管理</a>><a href=""><?php echo ($mainarea); ?></a></div>
		<div class="public-content">
			<div class="public-content-header">
				<h3><?php echo ($mainarea); ?></h3>
			</div>
			<div class="public-content-cont">
				<table class="public-cont-table">
					<tr>
						<th style="width:20%">编号</th>
						<th style="width:20%">名称</th>
						<th style="width:20%">文件路径</th>
						<th style="width:20%">上传时间</th>
						 <th style="width:20%">状态</th>
					</tr>
					<?php foreach($data as $k=>$v): ?>
					<tr>
						<td><?php echo $v['id']; ?></td>
						<td><?php echo $v['title']; ?></td>
						<td><?php echo $v['paperurl']; ?></td>
						<td><?php echo date('Y-m-d H:m:s',$v['papertime']); ?></td>
						<td><?php echo $v['isverify']==1?'通过':'未通过'; ?></td> 
					</tr>
					 <?php  endforeach; ?>
				</table>
				<!--  
				<div class="page">
					<form action="" method="get">
					共<span>42</span>个站点
						<a href="">首页</a>
						<a href="">上一页</a>
						<a href="">下一页</a>
						第<span style="color:red;font-weight:600">12</span>页
						共<span style="color:red;font-weight:600">120</span>页
						<input type="text" class="page-input">
						<input type="submit" class="page-btn" value="跳转">
					</form>
				</div>
				-->
			</div>
		</div>
	</div>
</body>
</html>