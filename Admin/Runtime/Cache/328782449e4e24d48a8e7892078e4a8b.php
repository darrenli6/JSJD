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
		<span><?php echo ($title); ?></span>
	</div>
	<form action="__SELF__" method='post'>
		<table class="table">
		<input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
			<tr>
				<td width='40%' align='right'>角色名称：</td>
				<td>
					<input type="text" name='rname' value="<?php echo $data['rname']; ?>"/>
				</td>
			</tr>
		   <tr>
				<td width='40%' align='right'>权限列表：</td>
				<td>
					 <?php foreach($priData as $k=>$v): if(strpos(','.$rpData.',',','.$v['id'].',') !== FALSE ) $check='checked="checked"'; else $check=''; ?>
					     <?php echo str_repeat('-', 8*$v['level']); ?>
					     <input level_id="<?php echo $v['level']; ?>" <?php echo $check; ?>  type="checkbox" name="pri_id[]" value="<?php echo $v['id']; ?>" />
					     <?php echo $v['priname'].'<br />'; ?>
					 <?php endforeach; ?>
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
  var IMAGEURL="<?php echo U('Departinfo/handlerimage');?>";
  
</script>
<script type="text/javascript" src="__PUBLIC__/Js/uploadimage.js"></script> 
<script type="text/javascript" src="__PUBLIC__/Js/checkboxoperation.js"></script> 
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