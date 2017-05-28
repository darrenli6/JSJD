<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="__PUBLIC__/css/ch-ui.admin.css">
	<link rel="stylesheet" href="__PUBLIC__/font/css/font-awesome.min.css">
    
</head>
<body>
    
    
    <div class="result_wrap">
    <form action="__SELF__" method='post'>
		<table class="table">
			<tr>
				<td width='45%' align='right'>专业名称：</td>
				<td>
					<input type="text" name='name'/>
				</td>
			</tr>
 
			<tr>
				<td colspan='2' align="center">
					<input type="submit" value='保存添加' class='big-btn'/>
				</td>
			</tr>
		</table>
	</form>
    </div>

 
 </body>
    <script type="text/javascript" src="__PUBLIC__/js/jquery.js">
    
    </script>
    
    <script type="text/javascript" src="__PUBLIC__/js/ch-ui.admin.js"></script>
    
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
<script type="text/javascript"> var SHOWIMAGE="/JSJD/Public/Upload/";
                                var delallurl="<?php echo U('delall');?>";
</script>	
      <script type="text/javascript">
      var delallurl="<?php echo U('delall');?>";
    </script>
<script type="text/javascript" src="__PUBLIC__/js/delall.js"></script>
</html>