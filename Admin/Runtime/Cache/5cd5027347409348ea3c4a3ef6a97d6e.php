<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title><?php echo ($title); ?></title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />

</head>
<body>
	<div class='status'>
		<span>首页轮播图</span>
	</div>
 
		<table class="table">
		   <?php foreach($data as $k=>$v): ?>
			<tr align=center   >
			  
				<td id="item<?php echo ($v["id"]); ?>"  item="<?php echo ($v["id"]); ?>">
				
					<img src="<?php echo $showimage; echo $v['cvalue'] ?>" width="120px" height="120px;"  /> 
				
				</td>
				<td>
					 <input type="file" id="uploadfile"  />
				</td>
			</tr>
			
		<?php endforeach; ?>	
	 
		 
		</table>
	 
</body>
	<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-1.8.2.min.js'></script>
	<script type="text/javascript" src='__PUBLIC__/Js/common.js'></script>
	<script type="text/javascript" src='__PUBLIC__/Js/uploadrotatefile.js'></script>
    <script>
       var FILEURL="<?php echo U('System/handlerimage');?>";
    </script>
</html>