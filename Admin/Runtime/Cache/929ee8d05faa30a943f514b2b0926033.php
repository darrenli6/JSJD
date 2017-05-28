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
			<th>标题</th>
			<th>缩略图</th>
			<th>发布时间</th>
			<th>权重</th>
			<th>点赞</th>
			<th colspan="2">状态</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($NData)): foreach($NData as $key=>$v): ?><tr>
			<td class="tc">
			<input type="checkbox" name="id"  id="id<?php echo ($v["id"]); ?>" onclick="addchecked(<?php echo ($v["id"]); ?>)"  value="<?php echo ($v["id"]); ?>"></td>
				<td width='50' align='center'><?php echo ($v["id"]); ?></td>
				<td width='100'><?php echo ($v["title"]); ?></td>
				<td width='130'>
					<img width='120' height='120' src="<?php echo ($path); echo ($v["img"]); ?>"/>
				</td>
				<td width='100'><?php echo ($v["publictime"]); ?></td>
				<td width='20'><?php echo ($v["sort"]); ?></td>
				<td width='20'><?php echo ($v["islike"]); ?></td>
				
				<td width='100'><?php if($v["isshow"]): ?>开放
					<?php else: ?>
					锁定<?php endif; ?>
				</td>
				<td width='100'>
				 <?php if($v["isshow"]): ?><a href="<?php echo U('handlerShownews', array('id' => $v['id'], 'isshow' => 0));?>" class='add lock'>锁定</a>
							<?php else: ?>
								<a href="<?php echo U('handlerShownews', array('id' => $v['id'], 'isshow' => 1));?>" class='add lock'>开放</a><?php endif; ?>
			    </td>
				
				<td width='300' align='center'>
				<a href="<?php echo U('show',array('id' => $v['id']));?>" target="_blank" class='see' >展示</a> 
				<a href="<?php echo U('edit', array('id' => $v['id']));?>" class='edit'>编辑</a>
				<a href="<?php echo U('del', array('id' => $v['id']));?>" class='del'>删除</a> 
				 </td>
			</tr><?php endforeach; endif; ?>
		<tr height='50'>
			<td align='center' colspan='10'><?php echo ($page); ?></td>
		</tr>
	</table>