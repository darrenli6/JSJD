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
 
<p>
<a href="<?php echo U('addQuality',array('sid'=>$sid));?>" class='addbtn' ></a> 
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
			<th>时间</th>
			<th>素质拓展项目</th>
			<th>分数</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($qsData)): foreach($qsData as $key=>$v): ?><tr>
			    <td width='50' align='center'><?php echo ($v["id"]); ?></td> 
				<td width='50' align='center'><?php echo ($v["stuid"]); ?></td>
				<td width='100'><?php echo ($v["stuname"]); ?></td>
				<td width='100'><?php echo ($v["addtime"]); ?></td>
                <td width='100'><?php echo ($v["qualityname"]); ?></td>
                <td width='100'><?php echo ($v["store"]); ?></td> 
				<td width='300' align='center'>
				<a href="<?php echo U('editQuality', array('id' => $v['id'],'sid'=>$v['sid']));?>" class='edit'></a>
				<a href="<?php echo U('delQuality', array('id' => $v['id']));?>" class='del'></a> 
				 </td>
			</tr><?php endforeach; endif; ?>
		<tr height='50'>
			<td align='center' colspan='7'><?php echo ($page); ?></td>
		</tr>
		 
	</table>
 
 
<script>
var SHOWIMAGE="/JSJD/Public/Upload/";
</script>
</body>
</html>