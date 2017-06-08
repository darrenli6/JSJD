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
				<td width='200' align='center'>
				<a href="<?php echo ($path); echo ($v["attachfile"]); ?>" class='down_file'></a>
				<a href="<?php echo U('showdetail',array('id' => $v['id']));?>" target="_blank" class='see' >展示</a>  
				<a href="<?php echo U('edit', array('id' => $v['id']));?>" class='edit'>编辑</a> 
				<a href="<?php echo U('del', array('id' => $v['id']));?>" class='del'>删除</a> 
				 </td>
			</tr><?php endforeach; endif; ?>
		<tr height='50'>
			<td align='center' colspan='8'><?php echo ($page); ?></td>
		</tr>
	</table>