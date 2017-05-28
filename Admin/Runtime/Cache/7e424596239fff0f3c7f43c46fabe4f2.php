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
    	<form action="__SELF__" method='post' name="addstu">
		<table class="table">
			<tr>
				<td width='45%' align='right'>
				<span style="color:red;" >*</span>
				学号：</td>
				<td>
					<input type="text" name='stuid'/>
				</td>
			</tr>
		   <tr>
				<td width='45%' align='right'>
				<span style="color:red;" >*</span>
				姓名：</td>
				<td>
					<input type="text" name='stuname'/>
				</td>
			</tr>
		 <tr>
				<td width='45%' align='right'>
				 
				身份证：</td>
				<td>
					<input type="text" name='idcard'/>
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
					 <input type="radio" name="sex" value="0" />女
					 <input type="radio" name="sex" value="1" />男
				</td>
			</tr>
	 
			<tr>
				<td width='45%' align='right'>出生年月：</td>
				<td>
					<input type="text" name='birthday'/>
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
					<input type="text" name='country'  />
				</td>
			</tr>
			
			<tr>
				<td width='45%' align='right'>学生户籍：</td>
					<td>
				    <select name="provinces" id="">
    						<option value="">请选择</option>
    					</select>&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="citys">
                            <option value="">请选择</option>
                  </select>
					<input type="text" name='countrys'  />
				</td>
			</tr>
			
			<tr>
				<td width='45%' align='right'>父母联系方式：</td>
				<td>
					<input type="text" name='parentstel'/>
				</td>
			</tr>
			
			<tr>
				<td width='45%' align='right'>免冠照片：</td>
				<td>
					 <input  type="file"   id="uploadlogo" />
					 <span style="color:red;">*请上传png,jpeg,jpg,gif格式的图片</span>
                     <div class="showimg">
                     
	                 </div>
	 			</td>
			</tr>
			
			
			<tr>
				<td width='45%' align='right'>电话：</td>
				<td>
					<input type="text" name='mobilephone'/>
				</td>
			</tr>
			<tr>
				<td width='45%' align='right'>邮箱：</td>
				<td>
					<input type="text" name='email'/>
				</td>
			</tr>
				<tr>
				<td align='right'>专业：</td>
				<td>
					<select name="pid"  onchange="selectClass()" >
					<?php if(is_array($PData)): foreach($PData as $key=>$v): ?><option  value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?>
					</select>
				</td>
			</tr>
			  <tr>
				<td align='right'>班级：</td>
				<td> 
					<select name="cid" id="cid">
					<?php if(is_array($CData)): foreach($CData as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?>
					</select>
				</td>
			</tr>
			  <tr>
				<td align='right'>部门：</td>
				<td> 
					<select name="deid" id="deid">
					<?php if(is_array($DData)): foreach($DData as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["departname"]); ?></option><?php endforeach; endif; ?>
					</select>
				</td>
			</tr>
			  <tr>
				<td align='right'>政治面貌：</td>
				<td> 
					<select name="deid" id="deid">
					<?php if(is_array($Partyinfo)): foreach($Partyinfo as $key=>$v): $v['id']==4?$selected='selected="selected"':$selected=''; ?>
						<option <?php echo $selected; ?> value="<?php echo ($v["id"]); ?>"><?php echo ($v["rolename"]); ?></option><?php endforeach; endif; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td width='45%' align='right'>自我评价：</td>
				<td>
				    <textarea cols="50" rows="6" name='stuinfo' id="stuinfo" >
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
	        
	       var objdatatime="input[name='birthday']";
	       var mynation='';
	       var checkStu="<?php echo U('checkStuid');?>";
</script>



<!-- 引入时间插件 -->
 <script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-1.8.2.min.js'></script>
<link href="__ROOT__/Public/datetimepicker/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" charset="utf-8" src="__ROOT__/Public/datetimepicker/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" charset="utf-8" src="__ROOT__/Public/datetimepicker/datepicker-zh_cn.js"></script>
<link rel="stylesheet" media="all" type="text/css" href="__ROOT__/Public/datetimepicker/time/jquery-ui-timepicker-addon.min.css" />
<script type="text/javascript" src="__ROOT__/Public/datetimepicker/time/jquery-ui-timepicker-addon.min.js"></script>
<script type="text/javascript" src="__ROOT__/Public/datetimepicker/time/i18n/jquery-ui-timepicker-addon-i18n.min.js"></script>


<script type="text/javascript">
$(objdatatime).datetimepicker(); ;
</script>
 </body>
 <script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-1.8.2.min.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-1.7.2.min.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-validate.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/common.js'></script> 
<script type="text/javascript" src="__PUBLIC__/js/ch-ui.admin.js"></script>
</html>  	

 
<script type="text/javascript"> var SHOWIMAGE="/JSJD/Public/Upload/";
                                var delallurl="<?php echo U('delall');?>";
</script>	
 
<script type="text/javascript" src="__PUBLIC__/js/delall.js"></script>

 <script type="text/javascript" src="__PUBLIC__/js/selectClass.js"></script>
 <script type="text/javascript" src="__PUBLIC__/js/city.js"></script> 
 <script type="text/javascript" src='__PUBLIC__/js/addstu.js'></script>  
 <script type="text/javascript" src="__PUBLIC__/js/uploadstuimage.js"></script> 
 <script type="text/javascript" src="__PUBLIC__/js/nation.js"></script>