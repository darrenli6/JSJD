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
    
<script> var mynation='';
         var checkStu="<?php echo U('checkStuid');?>";
</script>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /> 
	 
	<form action="__SELF__" method='post' name="addstu">
		<table class="table">
		<input type="hidden" name="id" value="<?php echo ($id); ?>" />
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
					<input type="text" name='addtime' value="<?php echo ($qsItem['addtime']); ?>" />
				</td>
			</tr>
			   
				<tr>
				<td align='right'>项目列表：</td>
				<td>
				<ul>
				    <li>
					<select name="qid"   >
					<?php if(is_array($qItems)): foreach($qItems as $key=>$v): $v['id']==$qsItem['qid']?$selected='selected="selected"':$selected=''; ?>
						<option <?php echo $selected; ?>  value="<?php echo ($v["id"]); ?>"   >  
						<?php echo ($v["qualityname"]); ?>---<?php echo ($v["fullstore"]); ?></option>分<?php endforeach; endif; ?>
					</select>
					<input type="text"  name="store" onblur="checkstore()" value="<?php echo ($qsItem["store"]); ?>" placeholder="请填写不大于满分" />
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
	  </body>
 <script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-1.8.2.min.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-1.7.2.min.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-validate.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/common.js'></script> 
<script type="text/javascript" src="__PUBLIC__/js/ch-ui.admin.js"></script>
</html>  	
	<script type="text/javascript">
	$( "input[name='addtime']" ).datetimepicker();
	 
	
	
	$(function(){
		 
		 
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