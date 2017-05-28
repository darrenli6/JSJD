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
				<td width='45%' align='right'>新闻分类名称：</td>
				<td>
					<input type="text" name='cat_name'/>
				</td>
			</tr>
            
            <tr>
				<td width='45%' align='right'>新闻分类说明：</td>
				<td>
				    <textarea rows="6" cols="30" name="cat_info"></textarea>
				</td>
			</tr>
			<input type="hidden" name="pid" value="0" />
			<!--  
             <tr>
				<td width='45%' align='right'>父级分类</td>
				<td>
				     <select name="pid">
				       <option value="0" >--顶级分类--</option>
				     </select>
				</td>
			</tr>
            -->
			<tr>
				<td colspan='2'>
					<input type="submit" value='保存添加' class='big-btn'/>
				</td>
			</tr>
		</table>
	</form>