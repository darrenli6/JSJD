<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="__PUBLIC__/css/ch-ui.admin.css">
	<link rel="stylesheet" href="__PUBLIC__/css/jquery-validate.css">
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
			<th>满分</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($QData)): foreach($QData as $key=>$v): ?><tr>
				<td width='50' align='center'><?php echo ($v["id"]); ?></td>
				<td width='100'><?php echo ($v["qualityname"]); ?></td>
				<td align='center'>
					<?php echo ($v["fullstore"]); ?>
				</td>
				<td width='400' align='center'>
				<a href="<?php echo U('show',array('id' => $v['id']));?>" target="_blank" class='see' >显示</a> 
				<a href="<?php echo U('edit', array('id' => $v['id']));?>" class='edit'>编辑</a>
				<a href="<?php echo U('del', array('id' => $v['id']));?>" class='del'>删除</a> 
				 </td>
			</tr><?php endforeach; endif; ?>
		<tr height='50'>
			<td align='center' colspan='7'><?php echo ($page); ?></td>
		</tr>
	</table>