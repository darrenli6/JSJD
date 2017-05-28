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

<link rel="stylesheet" href="__PUBLIC__/Css/stuindex.css" />
<p>
<a href="<?php echo U('add');?>" class='addbtn' ></a> 
</p>
 
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<div class='status'>
		<span><?php echo ($title); ?></span>
	</div>
	<table class='table'>
		<tr>
			<th>ID</th>
			<th>学号</th>
			<th>姓名</th>
			<th>免冠图片</th>
			<th>班级</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($CData)): foreach($CData as $key=>$v): ?><tr>
			    <td width='50' align='center'><?php echo ($v["id"]); ?></td> 
				<td width='50' align='center'><?php echo ($v["stuid"]); ?></td>
				<td width='100'><?php echo ($v["stuname"]); ?></td>
				<td width="200">
				      <?php if($v["face"]): ?><img src="<?php echo ($imagepath); echo ($v[face]); ?>" width="120px" height="120px" />
				      <?php else: ?>
				         <img src="__PUBLIC__/Images/people.png" width="120px" height="120px" /><?php endif; ?>
				</td>
				<td  align='center'>
					<?php echo ($v["name"]); ?>
				</td>
				<td width='300' align='center'>
				<a href="<?php echo U('showQuality', array('id' => $v['id']));?>" class='quality'></a>
				<a href="<?php echo U('showStu', array('id' => $v['id']));?>" class='see'></a>
				<a href="<?php echo U('edit', array('id' => $v['id']));?>" class='edit'></a>
				<a href="<?php echo U('del', array('id' => $v['id'],'stuid'=>$v['stuid']));?>" class='del'></a> 
				 </td>
			</tr><?php endforeach; endif; ?>
		<tr height='50'>
			<td align='center' colspan='7'><?php echo ($page); ?></td>
		</tr>
		<tr height='50'>
		  <td align='center' colspan='3'> 
		  <a href="<?php echo C('DOWNCOMMONFILE');?>stuinfo.xls">
		  <input type="button" class="download" value="下载模板" /></td>
		  </a>
		  <td align='center' colspan='4'>
		  <form  method="post" action="<?php echo U('uploadDataByxls');?>" enctype="multipart/form-data">
		   <input type="file" id="excel" name="import" />
           <input type="submit" class="download" value="上传数据" />                      
          </form>
          </td>
		   
		</tr>
	</table>

 
<script>
var SHOWIMAGE="/JSJD/Public/Upload/";
</script>
</body>
</html>