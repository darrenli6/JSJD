<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<style type="text/css">
.uploadifive-button {
	float: left;
	margin-right: 10px;
}
#queue {
    
	border: 1px solid #E5E5E5;
	height: 177px;
	overflow: auto;
	 
	  
	width: 300px;
}
</style>
<body >

  <form>
		<div id="queue"></div>
		<input id="file_upload" name="file_upload" type="file" multiple="true">
		<a style="" href="javascript:$('#file_upload').uploadifive('upload')">确定上传</a>
	   </form>

<script src="__ROOT__/Public/MulImageUp/jquery.min.js" type="text/javascript"></script>
<script src="__ROOT__/Public/MulImageUp/jquery.uploadifive.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="__ROOT__/Public/MulImageUp/uploadifive.css">  	 
          
   <script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadifive({
				'auto'             : false,
				'checkScript'      : "<?php echo U('Subjectrace/checkexists'); ?>",
				'formData'         : {
									   'timestamp' : '<?php echo $timestamp;?>',
									   'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				                     },
				'queueID'          : 'queue',
				'uploadScript'     : "<?php echo U('Subjectrace/uploadifive'); ?>",
				'onUploadComplete' : function(file, data) { console.log(data); }
			});
		});
	</script>
     



</body>
</html>