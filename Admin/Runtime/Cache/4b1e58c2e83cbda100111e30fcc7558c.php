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
		<input type="hidden" name="id" value="<?php echo ($NData["id"]); ?>"  />
		<table class="table">
		
			<tr>
				<td width='40%' align='right'>新闻标题：</td>
				<td>
					<input type="text" name='title' value="<?php echo ($NData["title"]); ?>" />
				</td>
			</tr>
			<tr>
				<td width='40%' align='right'>新闻分类：</td>
				<td>
					<select name="new_catid">
					  <?php  foreach($newsData as $k=>$v): if($v['id']==$NData.new_catid) $selected='selected="selected"'; ?>
					  <option  value="<?php echo $v['id']; ?>" 
					           <?php echo $selected; ?>
					   > <?php echo $v['cat_name']; ?></option>
					  <?php endforeach; ?>
					  
					</select>
				</td>
			</tr>
			<tr>
				<td width='40%' align='right'>新闻简介：</td>
				<td>
					<textarea name="summary" rows="6" cols="30">
					  <?php echo ($NData["summary"]); ?>
					</textarea>
				</td>
			</tr>
				<tr>
				<td width='40%' align='right'>新闻发布时间：</td>
				<td>
					<input type="text" name='publictime' value="<?php echo ($NData["publictime"]); ?>" readonly="readonly"  />
				</td>
			</tr>
		   <tr>
				<td width='40%' align='right'>缩略图：</td>
				<td>
					 <input  type="file"   id="uploadlogo" />
					 <span style="color:red;">*请上传png,jpeg,jpg,gif格式的图片</span>
                     <div class="showimg">
                       <img width='120' height='120' src="<?php echo ($path); echo ($NData["img"]); ?>" />;
                       <input type="hidden" name="img" value="<?php echo ($NData["img"]); ?>" />
	                 </div>
	 			</td>
			</tr>
			<tr>
				<td width='40%' align='right'>新闻排序权重：</td>
				<td>
					<input type="text" name='sort' value="<?php echo ($NData["sort"]); ?>" />
				</td>
			</tr>
			
				<tr>
				<td width='40%' align='right'>是否前台显示：</td>
				<td>
				    <?php $check=$NData['isshow']==1?'checked="checked"':''; $check1=$NData['isshow']==0?'checked="checked"':''; ?>
					<input type="radio" name='isshow' value="1"  <?php echo $check; ?>  />是
					<input type="radio" name='isshow' value="0"  <?php echo $check1; ?>  />否
				</td>
			</tr>
			
		     <tr>
				<td width='40%' align='right'>新闻内容：</td>
				<td>
				<br /><br /><br /><br /><br /><br /><br /><br />
				<br /><br /><br /><br />
			    <textarea id="context" cols="40" rows="6" name="content">
			     <?php echo ($NData["content"]); ?>
			    </textarea>
                    </td> 
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
  var IMAGEURL="<?php echo U('News/handlerimage');?>";
  var SHOWIMAGE="<?php echo ($path); ?>";
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
<script type="text/javascript" src="__PUBLIC__/Js/uploadnewsimage.js"></script> 
 <!-- 引入时间插件 -->
	 
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/time_plugin/css/jquery-ui.css" />
	<script type="text/javascript" src="__PUBLIC__/time_plugin/js/jquery-ui-1.10.4.custom.min.js"></script>
	<script type="text/javascript" src="__PUBLIC__/time_plugin/js/jquery.ui.datepicker-zh-CN.js"></script>
	<script type="text/javascript" src="__PUBLIC__/time_plugin/js/jquery-ui-timepicker-addon.js"></script>
	<script type="text/javascript" src="__PUBLIC__/time_plugin/js/jquery-ui-timepicker-zh-CN.js"></script>
	<script type="text/javascript">
	$( "input[name='publictime']" ).datetimepicker();
	function getNowFormatDate() {
	    var date = new Date();
	    var seperator1 = "-";
	    var seperator2 = ":";
	    var month = date.getMonth() + 1;
	    var strDate = date.getDate();
	    if (month >= 1 && month <= 9) {
	        month = "0" + month;
	    }
	    if (strDate >= 0 && strDate <= 9) {
	        strDate = "0" + strDate;
	    }
	    var currentdate = date.getFullYear() + seperator1 + month + seperator1 + strDate
	            + " " + date.getHours() + seperator2 + date.getMinutes()
	            + seperator2 + date.getSeconds();
	    return currentdate;
	}
	
	
	$(function(){
		var nowtime=getNowFormatDate();
		$( "input[name='publictime']" ).val(nowtime);
		 
	});
</script>	
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