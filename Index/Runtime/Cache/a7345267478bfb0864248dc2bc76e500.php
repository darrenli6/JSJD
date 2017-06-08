<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
			<form action="" method="post">
				<div class="form-group">
					<label for="">学号</label>
					<input class="form-input-txt" type="text" name="stu_id" readonly="readonly" value="<?php echo ($s["stu_id"]); ?>" />
				</div>
	           <div class="form-group">
					<label for="">姓名</label>
					<input class="form-input-txt" type="text" name="stuname"  readonly="readonly" value="<?php echo ($s["stuname"]); ?>" />
				</div>
	            
	           <div class="form-group">
					<label for="">民族</label>
					<input class="form-input-txt" type="text" name="nation"  readonly="readonly" value="<?php echo ($s["nation"]); ?>" />
				</div>
				
				<div class="form-group">
					<label for="">身份证号</label>
					<input class="form-input-txt" type="text" name="idcard"  readonly="readonly" value="<?php echo ($s["idcard"]); ?>" />
				</div>
				
				<div class="form-group">
					<label for="">学生注册地</label>
					<input class="form-input-txt" type="text" name="registarea"  readonly="readonly" value="<?php echo ($s["registarea"]); ?>" />
				</div>
				
			<div class="form-group">
					<label for="">学生户籍</label>
					<input class="form-input-txt" type="text" name="resourcearea"  readonly="readonly" value="<?php echo ($s["resourcearea"]); ?>" />
				</div>
				<div class="form-group">
					<label for="">父母联系</label>
					<input class="form-input-txt" type="text" name="parentstel"  readonly="readonly" value="<?php echo ($s["parentstel"]); ?>" />
				</div>
					<div class="form-group">
					<label for="">性别</label>
					<input class="form-input-txt" type="text" name="parentstel"  readonly="readonly" value="<?php echo $s['sex']==0?'女':'男'; ?>" />
				</div>
				
				</div>
					<div class="form-group">
					<label for="">手机号</label>
					<input class="form-input-txt" type="text" name="mobilephone"  readonly="readonly" value="<?php echo $s['mobilephone']; ?>" />
				</div>
				
				
				<div class="form-group" style="margin-left:150px;">
					<input type="submit" class="sub-btn" value="提  交" />
					<input type="reset" class="sub-btn" value="重  置" />
				</div>
				</form>
			</div>
		</div>
	</div>
<script src="__PUBLIC__/UserCenter/kingediter/kindeditor-all-min.js"></script>
 
</body>
</html>