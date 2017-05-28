<?php if (!defined('THINK_PATH')) exit();?>  <!DOCTYPE html>
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
				<td width='40%' align='right'>角色名称：</td>
				<td>
					<input type="text" name='rname'/>
				</td>
			</tr>
		   <tr>
				<td width='40%' align='right'>权限列表：</td>
				<td>
					 <?php foreach($priData as $k=>$v): ?>
					     <?php echo str_repeat('-', 8*$v['level']); ?>
					     <input level_id="<?php echo $v['level']; ?>"  type="checkbox" name="pri_id[]" value="<?php echo $v['id']; ?>" />
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
 </body>
 
 <script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-1.8.2.min.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-1.7.2.min.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-validate.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/common.js'></script> 
    <script type="text/javascript" src="__PUBLIC__/js/ch-ui.admin.js"></script>
 
 	 <!-- 引入时间插件 -->
	 
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/time_plugin/css/jquery-ui.css" />
	<script type="text/javascript" src="__PUBLIC__/time_plugin/js/jquery-ui-1.10.4.custom.min.js"></script>
	<script type="text/javascript" src="__PUBLIC__/time_plugin/js/jquery.ui.datepicker-zh-CN.js"></script>
	<script type="text/javascript" src="__PUBLIC__/time_plugin/js/jquery-ui-timepicker-addon.js"></script>
	<script type="text/javascript" src="__PUBLIC__/time_plugin/js/jquery-ui-timepicker-zh-CN.js"></script>
	<script type="text/javascript">
	$(objdatatime).datetimepicker();
	</script>
    
 <!--导入在线编辑器 -->
<link href="__PUBLIC__/umeditor1_2_2-utf8-php/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<script type="text/javascript" charset="utf-8" src="__PUBLIC__/umeditor1_2_2-utf8-php/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="__PUBLIC__/umeditor1_2_2-utf8-php/umeditor.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/umeditor1_2_2-utf8-php/lang/zh-cn/zh-cn.js"></script>
<script>
UM.getEditor(objeditor, {
	initialFrameWidth : "80%",
	initialFrameHeight : 350
});
</script>
<script type="text/javascript"> var SHOWIMAGE="/JSJD/Public/Upload/";
                                var delallurl="<?php echo U('delall');?>";
</script>	
 
<script type="text/javascript" src="__PUBLIC__/js/delall.js"></script>
</html>  	
<script type="text/javascript" src="__PUBLIC__/Js/uploadimage.js"></script> 
<script type="text/javascript" src="__PUBLIC__/Js/checkboxoperation.js"></script>