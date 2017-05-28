<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="__PUBLIC__/css/ch-ui.admin.css">
	<link rel="stylesheet" href="__PUBLIC__/font/css/font-awesome.min.css">
    
</head>
<body>
    
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /> 
	<div class='status'>
		<span>后台管理员列表</span>
	</div>
	<form action="__SELF__" method='post'>
		<table class="table">
		<input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
			<tr>
				<td width='45%' align='right'>上级权限:</td>
				<td>
					<select name="parentid">
					 <option value="0"></option>
					 <?php foreach($parentData as $k=>$v): ?>
					   <?php if($v['id']==$data['id'] || in_array($v['id'],$chldren) ) continue; ?>        
					      <option <?php if($v['id']==$data['parentid']): ?> selected="selected" 
					       <?php endif; ?>
					       value="<?php echo $v['id']; ?>" >
					        <?php echo str_repeat('-',8*$v['level']).$v['priname']; ?>
					      </option>
					 
					 <?php endforeach; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td align='right'>权限名称:</td>
				<td>
					<input type="text" name='priname' value="<?php echo ($data['priname']); ?>"/>
				</td>
			</tr>
			<tr>
				<td align='right'>模块名称：</td>
				<td>
					<input type="text" name='modulename' value="<?php echo ($data['modulename']); ?>" />
				</td>
			</tr>
		   
		   	<tr>
				<td align='right'>控制器名称：</td>
				<td>
					<input type="text" name='controllername' value="<?php echo ($data['controllername']); ?>" />
				</td>
			</tr>
			
				<tr>
				<td align='right'>方法名称：</td>
				<td>
					<input type="text" name='actionname'  value="<?php echo ($data['actionname']); ?>" />
				</td>
			</tr>
			
			<tr>
				<td colspan='2'>
					<input type="submit" value='保存修改' class='big-btn'/>
				</td>
			</tr>
		</table>
	</form>