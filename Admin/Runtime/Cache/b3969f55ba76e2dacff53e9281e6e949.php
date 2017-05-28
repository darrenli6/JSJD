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
    
    
    <div class="result_wrap">
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
				 
				身份证：</td>
				<td>
					<input type="text" name='idcard'  value="<?php echo ($SData["idcard"]); ?>"/>
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

    </div>

 

<script type="text/javascript">
	       var LOADCLASS="<?php echo U('ajaxLoadClass');?>";
	       var IMAGEURL="<?php echo U('ajaxLoadFace');?>";
	       var objeditor='stuinfo';
	       var objdatatime="input[name='birthday']";
	       var mynation='';
	       var checkStu="<?php echo U('checkStuid');?>";
	       var mynation="<?php echo ($SData["nation"]); ?>";
	       
	       var regist="<?php echo ($SData["registarea"]); ?>";
	       var resource="<?php echo ($SData["resourcearea"]); ?>";
	       var registArr=new Array();
	       var resourceArr =new Array();
	       registArr=regist.split('-');
	       resourceArr=resource.split('-');
</script>
 </body>
 <script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-1.8.2.min.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-1.7.2.min.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-validate.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/common.js'></script> 
<script type="text/javascript" src="__PUBLIC__/js/ch-ui.admin.js"></script>
</html>  	

 	
 <script type="text/javascript" src="__PUBLIC__/js/selectClass.js"></script>
 <script type="text/javascript" src="__PUBLIC__/js/city.js"></script> 
 <script type="text/javascript" src='__PUBLIC__/js/editstu.js'></script>  
 <script type="text/javascript" src="__PUBLIC__/js/uploadstuimage.js"></script> 
 <script type="text/javascript" src="__PUBLIC__/js/nation.js"></script>