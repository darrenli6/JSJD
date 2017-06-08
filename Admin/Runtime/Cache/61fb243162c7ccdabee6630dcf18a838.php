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

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /> 
	<div class='status'>
		<span>党员费用编辑</span>
	</div>
	<form action="__SELF__" method='post'>
		<table class="table">
		<input type="hidden" name="id" value="<?php  echo $data['id']; ?>" />
		<input type="hidden" name="sid" value="<?php  echo $data['sid']; ?>" />     
			<tr>
				<td width='45%' align='right'>学号-姓名：</td>
				<td>
					<input type="text"  readonly="readonly" value="<?php echo $data['stu_id'].'-'.$data['stuname']; ?>"/>
				</td>
			</tr>
				 <tr>
				<td width='40%' align='right'>缴纳时间：</td>
				<td>
			     <input  name="feetime" readonly="readonly" id="feetime" value="<?php echo $data['feetime']; ?>" />
                    </td> 
			 
			</tr>
			 </tr>
				 <tr>
				<td width='40%' align='right'>缴纳费用：</td>
				<td>
			     <input  name="feevalue"  id="feetime" value="<?php echo $data['feevalue']; ?>" />
                    </td> 
			 
			</tr>
			 
		  <tr>
				<td width='40%' align='right'>是否缴纳：</td>
				<td>
			     <select name="status"  >
			     <?php  if($data['status']==1) echo 'selected="selected"'; ?>
			     <option value="1" <?php  if($data['status']==1) echo 'selected="selected"'; ?> >已经缴纳</option>
			     <option value="0"
			     <?php  if($data['status']==0) echo 'selected="selected"'; ?>
			      >未缴纳</option>
			     </select>
                    </td> 
				
			</tr>
		     
			  <tr>
				<td width='40%' align='right'>备注：</td>
				<td>
				  
				 <textarea name="summary" rows="5" cols="80"><?php echo $data['summary']; ?></textarea>
	 			</td>
			</tr>
       
		 
			<tr>
				<td colspan='2'>
					<input type="submit" value='保存添加' class='big-btn'/>
				</td>
			</tr>
		</table>
	</form>
	
	                      	<!-- 引入时间插件 -->

<link href="__ROOT__/Public/datetimepicker/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" charset="utf-8" src="__ROOT__/Public/datetimepicker/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" charset="utf-8" src="__ROOT__/Public/datetimepicker/datepicker-zh_cn.js"></script>
<link rel="stylesheet" media="all" type="text/css" href="__ROOT__/Public/datetimepicker/time/jquery-ui-timepicker-addon.min.css" />
<script type="text/javascript" src="__ROOT__/Public/datetimepicker/time/jquery-ui-timepicker-addon.min.js"></script>
<script type="text/javascript" src="__ROOT__/Public/datetimepicker/time/i18n/jquery-ui-timepicker-addon-i18n.min.js"></script>


<script type="text/javascript">
$( "input[name='feetime']" ).datetimepicker(); ;
</script>

 
<script>
var SHOWIMAGE="/JSJD/Public/Upload/";
</script>
</body>
</html>