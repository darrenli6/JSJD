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
			<th>时间</th>
			<th>部门组织</th>
			<th colspan="2">是否开放</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($SData)): foreach($SData as $key=>$v): ?><tr>
				<td width='50' align='center'><?php echo ($v["id"]); ?></td>
				<td width='100'><?php echo ($v["racename"]); ?></td>
				<td align='center'>
				   	<?php if($v["smallimg"]): ?><img width='120' height='120' src="<?php echo ($path); echo ($v["smallimg"]); ?>"/>
				    <?php else: ?>
				              无<?php endif; ?>
				</td>
				<td align='center'>
					 <?php echo ($v["racetime"]); ?>----<?php echo ($v["endtime"]); ?>
				</td>
				<td align='center'>
					 <ul>
					 <?php $DData= M('Departinfo')->field('departname')->where(array( 'id'=>array('in',$v[deds]) ))->select(); ?>
			     <?php if(is_array($DData)): foreach($DData as $key=>$vv): ?><li><?php echo ($vv["departname"]); ?></li><?php endforeach; endif; ?>		 
					</ul>
				</td>
	           <td width='60' align='center'>
	           <?php if($v["is_show"]): ?>开放
	          <?php else: ?> 锁定<?php endif; ?></td>
				<td width='100' align='center'>
					<?php if($v["is_show"]): ?><a href="<?php echo U('lock', array('id' => $v['id'], 'is_show' => 0));?>" class='add lock'>锁定</a>
					<?php else: ?>
						<a href="<?php echo U('unlock', array('id' => $v['id'], 'is_show' => 1));?>" class='add lock'>解除锁定</a><?php endif; ?>
				</td>
				<td width='100' align='center'>
				<a href="<?php echo U('show',array('id' => $v['id']));?>" target="_blank" class='see' ></a> 
				<a href="<?php echo U('edit', array('id' => $v['id']));?>" class='edit'></a>
				<a href="<?php echo U('del', array('id' => $v['id']));?>" class='del'></a> 
				 </td>
			</tr><?php endforeach; endif; ?>
		<tr height='50'>
			<td align='center' colspan='8'><?php echo ($page); ?></td>
		</tr>
	</table>

 
<script>
var SHOWIMAGE="/JSJD/Public/Upload/";
</script>
</body>
</html>