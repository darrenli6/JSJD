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

<a href="<?php echo U('add');?>" class='addbtn' ></a> 
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<div class='status'>
		<span><?php echo ($title); ?></span>
	</div>
	<table class='table'>
		<tr>
			<th>ID</th>
			<th>名称</th>
			<th>缩略图</th>
			<th>周期</th>
			<th colspan="2">状态</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($PData)): foreach($PData as $key=>$v): ?><tr>
				<td width='50' align='center'><?php echo ($v["id"]); ?></td>
				<td width='100'><?php echo ($v["title"]); ?></td>
				<td>
				  <img width='120' height='120' src='<?php echo ($imgpath); echo ($v["smallimg"]); ?>'>
				</td>
				<td align='center'>
					<?php echo ($v["starttime"]); ?>--<?php echo ($v["endtime"]); ?>
				</td>
				
				<td>
				<?php if($v["is_show"]): ?>开放
	          <?php else: ?> 锁定<?php endif; ?></td>
				<td width='100' align='center'>
					<?php if($v["is_show"]): ?><a href="<?php echo U('unshow', array('id' => $v['id'], 'is_show' => 0));?>" class='add lock'>锁定</a>
					<?php else: ?>
						<a href="<?php echo U('show', array('id' => $v['id'], 'is_show' => 1));?>" class='add lock'>开放</a><?php endif; ?>
				</td>
				<td width='100' align='center'>
				<a href="<?php echo ($path); echo ($v["attachfile"]); ?>" class='down_file'></a>
				<a href="<?php echo U('showdetail',array('id' => $v['id']));?>" target="_blank" class='see' ></a>  
				<a href="<?php echo U('edit', array('id' => $v['id']));?>" class='edit'></a> 
				<a href="<?php echo U('del', array('id' => $v['id']));?>" class='del'></a> 
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