<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="__PUBLIC__/UserCenter/css/reset.css" />
	<link rel="stylesheet" href="__PUBLIC__/UserCenter/css/content.css" />
</head>
<body marginwidth="0" marginheight="0">
	<div class="container">
		<div class="public-nav">您当前的位置：<a href=""><?php echo ($mainarea); ?></a>></div>
		<div class="public-content">
			<div class="public-content-header">
				<h3><?php echo ($title); ?></h3>
			</div>
			<div class="public-content-cont">
			<form action="__SELF__" method="post">
				<div class="form-group">
					<label for="">标题</label>
					<input class="form-input-txt" type="text" name="title"  value="" />
				</div>
	            <div class="form-group">
					<label for="">文件上传：</label>
					
                    <input  type="file"   id="uploadfile" />
					 <span style="color:red;">*请上传doc,docx格式的文件</span>
                     <div class="showfile">
                     
	                 </div>
				</div>
 
				
				
				<div class="form-group" style="margin-left:150px;">
					<input type="submit" class="sub-btn" value="提  交" />
					<input type="reset" class="sub-btn" value="重  置" />
				</div>
				</form>
			</div>
		</div>
	</div>
 
</body>
</html>
<script>
  var FILEURL="<?php echo U('Usercenter/handlerfile');?>";
  
</script>
<script type="text/javascript" src="__PUBLIC__/lib/jquery-1.8.3.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/uploadpartyfile.js"></script>