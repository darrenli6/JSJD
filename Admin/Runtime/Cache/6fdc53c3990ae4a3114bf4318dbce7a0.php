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

<script> var mynation="<?php echo ($SData["nation"]); ?>"; 
             
</script>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /> 
	<div class='status'>
		<span><?php echo ($title); ?></span>
	</div>
	<form action="__SELF__" method='post'>
		<table class="table">
		<input type="hidden" name="id" value="<?php echo ($SData["id"]); ?>" />
			<tr>
				<td width='45%' align='right'>
				<span style="color:red;" >*</span>
				学号：</td>
				<td>
					<input type="text"   name='stuid' value="<?php echo ($SData["stu_id"]); ?>"/>
				</td>
			</tr>
		   <tr>
				<td width='45%' align='right'>
				<span style="color:red;" >*</span>
				姓名：</td>
				<td>
					<input type="text" name='stuname' value="<?php echo ($SData["stuname"]); ?>"/>
				</td>
			</tr>
			  <tr>
				<td width='45%' align='right'>
				 
				民族:</td>
				<td>
					<select name="nation" id="nation">
					     
					</select>
				</td>
			</tr>
			 <tr>
				<td width='45%' align='right'>性别：</td>
				<td>
					 <input type="radio" name="sex"  value="0" <?php echo $SData['sex']==0? 'checked="checked"' :''; ?> />女
					 <input type="radio" name="sex" value="1"  <?php echo $SData['sex']==1? 'checked="checked"' :''; ?> />男
				</td>
			</tr>
	 
			<tr>
				<td width='45%' align='right'>出生年月：</td>
				<td>
					<input type="text" name='birthday' value="<?php echo ($SData["birthday"]); ?>"/>
				</td>
			</tr>
			<tr>
				<td width='45%' align='right'>生源地：</td>
				<td>
				    <select name="province" id="">
    						<option value="">请选择</option>
    					</select>&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="city">
                            <option value="">请选择</option>
                  </select>
					<input type="text" name='country' value="" />
				</td>
			</tr>
			
			<tr>
				<td width='45%' align='right'>学生户籍：</td>
					<td>
				    <select name="provinces"  >
    						<option value="">请选择</option>
    					</select>&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="citys">
                            <option value="">请选择</option>
                  </select>
					<input type="text" name='countrys' value="" />
				</td>
			</tr>
			
			<tr>
				<td width='45%' align='right'>父母联系方式：</td>
				<td>
					<input type="text" name='parentstel' value="<?php echo ($SData["parentstel"]); ?>"/>
				</td>
			</tr>
			
			<tr>
				<td width='45%' align='right'>免冠照片：</td>
				<td>
					 <input  type="file"   id="uploadlogo" />
					 <span style="color:red;">*请上传png,jpeg,jpg,gif格式的图片</span>
                     <div class="showimg">
                      <img width='120' height='120' src="<?php echo ($imagepath); echo ($SData["face"]); ?>"> 
		     		  <input type='hidden' name='face' value="<?php echo ($SData["face"]); ?>"  />  
	                 </div>
	 			</td>
			</tr>
			
			
			<tr>
				<td width='45%' align='right'>电话：</td>
				<td>
					<input type="text" name='mobilephone' value="<?php echo ($SData["mobilephone"]); ?>"/>
				</td>
			</tr>
			<tr>
				<td width='45%' align='right'>邮箱：</td>
				<td>
					<input type="text" name='email' value="<?php echo ($SData["email"]); ?>"/>   
				</td>
			</tr>
				<tr>
				<td align='right'>专业：</td>
				<td>
					<select name="pid"  onchange="selectClass()" >
					<?php if(is_array($PData)): foreach($PData as $key=>$v): if($v['id']==$classinfo['pid']){ $select='selected="selected"'; } ?>	
						<option  value="<?php echo ($v["id"]); ?>" <?php echo $select; ?>  ><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?>
					</select>
				</td>
			</tr>
			  <tr>
				<td align='right'>班级：</td>
				<td> 
					<select name="cid" id="cid">
					<?php if(is_array($CData)): foreach($CData as $key=>$v): if($v['id']==$SData['cid']){ $select='selected="selected"'; } ?>	
						<option  value="<?php echo ($v["id"]); ?>" <?php echo $select; ?> ><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?>
					</select>
				</td>
			</tr>
			  <tr>
				<td align='right'>部门：</td>
				<td> 
					<select name="deid" id="deid">
					<?php if(is_array($DData)): foreach($DData as $key=>$v): if($v['id']==$SData['deid']){ $select='selected="selected"'; } ?>			
						<option value="<?php echo ($v["id"]); ?>" <?php echo $select; ?>  ><?php echo ($v["departname"]); ?></option><?php endforeach; endif; ?>
					</select>
				</td>
			</tr>
			  <tr>
				<td align='right'>政治面貌：</td>
				<td> 
					<select name="deid" id="deid">
					<?php if(is_array($Partyinfo)): foreach($Partyinfo as $key=>$v): $v['id']==$SData['partyid']?$selected='selected="selected"':$selected=''; ?>
						<option <?php echo $selected; ?> value="<?php echo ($v["id"]); ?>"><?php echo ($v["rolename"]); ?></option><?php endforeach; endif; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td width='45%' align='right'>备注：</td>
				<td>
					 <textarea cols="50" rows="6" name='stuinfo' id="stuinfo" >
					 <?php echo $SData['stuinfo']; ?>
				    </textarea>
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
	       var LOADCLASS="<?php echo U('ajaxLoadClass');?>";
	       var IMAGEURL="<?php echo U('ajaxLoadFace');?>";
	       var regist="<?php echo ($SData["registarea"]); ?>";
	       var resource="<?php echo ($SData["resourcearea"]); ?>";
	</script>
	<script type="text/javascript" src='__PUBLIC__/Js/editstu.js'></script>

	<script type="text/javascript">
	$( "input[name='birthday']" ).datetimepicker();
	
	</script>
	<!--导入在线编辑器 -->
	<link href="__PUBLIC__/umeditor1_2_2-utf8-php/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" charset="utf-8" src="__PUBLIC__/umeditor1_2_2-utf8-php/umeditor.config.js"></script>
	<script type="text/javascript" charset="utf-8" src="__PUBLIC__/umeditor1_2_2-utf8-php/umeditor.min.js"></script>
	<script type="text/javascript" src="__PUBLIC__/umeditor1_2_2-utf8-php/lang/zh-cn/zh-cn.js"></script>
	<script>
	UM.getEditor('stuinfo', {
		initialFrameWidth : "80%",
		initialFrameHeight : 350,
		scaleEnabled:true
	});
	</script>	
	 <!-- 引入时间插件 -->
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/time_plugin/css/jquery-ui.css" />
	<script type="text/javascript" src="__PUBLIC__/time_plugin/js/jquery-ui-1.10.4.custom.min.js"></script>
	<script type="text/javascript" src="__PUBLIC__/time_plugin/js/jquery.ui.datepicker-zh-CN.js"></script>
	<script type="text/javascript" src="__PUBLIC__/time_plugin/js/jquery-ui-timepicker-addon.js"></script>
	<script type="text/javascript" src="__PUBLIC__/time_plugin/js/jquery-ui-timepicker-zh-CN.js"></script>		
 <script type="text/javascript" src="__PUBLIC__/Js/selectClass.js"></script>
 <script type="text/javascript" src="__PUBLIC__/Js/city.js"></script> 
 <script type="text/javascript" src="__PUBLIC__/Js/edit.js"></script>   
 <script type="text/javascript" src="__PUBLIC__/Js/uploadstuimage.js"></script> 
 <script type="text/javascript" src="__PUBLIC__/Js/nation.js"></script>  
 
<script>
var SHOWIMAGE="/JSJD/Public/Upload/";
</script>
</body>
</html>