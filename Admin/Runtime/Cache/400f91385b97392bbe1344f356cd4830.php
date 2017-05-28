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
				<td width='40%' align='right'>党员思想汇报名称：</td>
				<td>
					<input type="text" name='title'/>
				</td>
			</tr>
		   <tr>
				<td width='40%' align='right'>党员思想汇报文件：</td>
				<td>
					 <input  type="file"   id="uploadfile" />
					 <span style="color:red;">*请上传doc,docx格式的文件</span>
                     <div class="showfile">
                     
	                 </div>
	 			</td>
			</tr>
		     
			<tr>
				<td colspan='2'>
					<input type="submit"  value='保存添加' class='big-btn'/>
				</td>
			</tr>
		</table>
	</form>
<script>
  var FILEURL="<?php echo U('Partyideapaper/handlerfile');?>";
  
</script>
<script type="text/javascript" src="__PUBLIC__/Js/uploadpartyfile.js"></script>