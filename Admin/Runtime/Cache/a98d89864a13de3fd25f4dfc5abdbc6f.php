<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title><?php echo ($title); ?></title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />

</head>
<body>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-1.8.2.min.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-1.7.2.min.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-validate.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/common.js'></script> 

<script> var mynation='';
         var checkStu="<?php echo U('checkStuid');?>";
</script>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /> 
	<div class='status'>
		<span><?php echo ($title); ?></span>
	</div>
	<form action="__SELF__" method='post' name="addstu">
		<table class="table">
		<input type="hidden" name="sid" value="<?php echo ($stuinfo["id"]); ?>" />
			<tr>
				<td width='45%' align='right'>
				<span style="color:red;" >*</span>
				学号：</td>
				<td>
					<input type="text" readonly="readonly" value="<?php echo ($stuinfo["stuid"]); ?>" name='stuid'/>
				</td>
			</tr>
		    
	 
			<tr>
				<td width='45%' align='right'>时间：</td>
				<td>
					<input type="text" name='addtime' />
				</td>
			</tr>
			   
				<tr>
				<td align='right'>项目列表：</td>
				<td>
				<ul>
				    <li>
					<select name="qid"   >
					<?php if(is_array($qItems)): foreach($qItems as $key=>$v): ?><option  value="<?php echo ($v["id"]); ?>"  ><?php echo ($v["qualityname"]); ?>---<?php echo ($v["fullstore"]); ?></option>分<?php endforeach; endif; ?>
					</select>
					<input type="text"  name="store" onblur="checkstore()" placeholder="请填写不大于满分" />
					<span color="red"></span>
					</li>
				</ul>	
				</td>
			</tr>
		 
		   
			<tr>
				<td colspan='2'>
					<input type="submit" value='保存添加' class='big-btn'/>
				</td>
			</tr>
		</table>
	</form>
	 
	<script type="text/javascript">
	        
	</script>
	 <!-- 引入时间插件 -->
	 
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/time_plugin/css/jquery-ui.css" />
	<script type="text/javascript" src="__PUBLIC__/time_plugin/js/jquery-ui-1.10.4.custom.min.js"></script>
	<script type="text/javascript" src="__PUBLIC__/time_plugin/js/jquery.ui.datepicker-zh-CN.js"></script>
	<script type="text/javascript" src="__PUBLIC__/time_plugin/js/jquery-ui-timepicker-addon.js"></script>
	<script type="text/javascript" src="__PUBLIC__/time_plugin/js/jquery-ui-timepicker-zh-CN.js"></script>
	<script type="text/javascript">
	$( "input[name='addtime']" ).datetimepicker();
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
		$( "input[name='addtime']" ).val(nowtime);
		 
	});
	function checkstore(){ 
		var val=$('option:selected').text();
		var arr=val.split('---');
		var v=arr[1];
		var currentStore=$('input[name=store]').val();
		if(parseInt(currentStore)>parseInt(v)) {
			$('input[name=store] + span').removeClass(); 
		    var spanhtml="不能大于满分";
		    $('input[name=store] + span').addClass('error');
			$('input[name=store] + span').text(spanhtml);
		}else{
			$('input[name=store] + span').removeClass(); 
			$('input[name=store] + span').addClass('success');
			$('input[name=store] + span').text('');
		}
	}
	</script>
	 
 
<script>
var SHOWIMAGE="/JSJD/Public/Upload/";
</script>
</body>
</html>