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
    
    <!--搜索结果页面 列表 开始-->
    <form action="#" method="post">
        <div class="result_wrap">
            <!--快捷导航 开始-->
            <div class="result_content">
                <div class="short_wrap">
                    <a href="<?php echo U('add');?>"><i class="fa fa-plus"></i>新增</a>
                    <a href="#" onclick="delall()"><i class="fa fa-recycle"></i>批量删除</a>
                </div>
            </div>
            <!--快捷导航 结束-->
        </div>

        <div class="result_wrap">
            <div class="result_content">
                <table class="list_tab">
                    <tr>
                    <th class="tc" width="5%"><input type="checkbox" id="all" name=""></th>
			<th>ID</th>
			<th>名称</th>
			<th>缩略图</th>
			<th>时间</th>
			<th>部门组织</th>
			<th colspan="2">是否开放</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($SData)): foreach($SData as $key=>$v): ?><tr>
			 <th class="tc" width="5%"><input type="checkbox" id="all" name=""></th>
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
				<a href="<?php echo U('show',array('id' => $v['id']));?>" target="_blank" class='see' >查看</a> 
				<a href="<?php echo U('edit', array('id' => $v['id']));?>" class='edit'>编辑</a>
				<a href="<?php echo U('del', array('id' => $v['id']));?>" class='del'>删除</a> 
				 </td>
			</tr><?php endforeach; endif; ?>
		<tr height='50'>
			<td align='center' colspan='9'><?php echo ($page); ?></td>
		</tr>
	</table>