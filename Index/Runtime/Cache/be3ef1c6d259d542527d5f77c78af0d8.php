<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台欢迎页</title>
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
					<label for="">原密码</label>
					<input class="form-input-txt" type="password" name="old"  value="<?php echo ($s["stu_id"]); ?>" />
				</div>
	           <div class="form-group">
					<label for="">新密码</label>
					<input class="form-input-txt" type="password" name="new"    value="<?php echo ($s["stuname"]); ?>" />
				</div>
	           <div class="form-group">
					<label for="">再一次密码</label>
					<input class="form-input-txt" type="password" name="new1"    value="<?php echo ($s["stuname"]); ?>" />
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