<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
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
    
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /> 
        <!--搜索结果页面 列表 开始-->
 
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
			<th>权限名称</th>
			<th>模块名</th>
			<th>控制器名</th>
			<th>方法名</th>
			<th>上级分类</th>
			<th>操作</th>
		</tr>
		<?php foreach($data as $k=>$v): ?>
			<tr>
			<td>  <input type="checkbox" name="id"  id="id<?php echo ($v["id"]); ?>" onclick="addchecked(<?php echo ($v["id"]); ?>)"  value="<?php echo ($v["id"]); ?>"></td>
			    <td><?php echo $v['id']; ?></td>
				<td><?php echo str_repeat('-', 8*$v['level']); echo $v['priname']; ?></td>
				<td><?php echo $v['modulename']; ?></td>
				<td><?php echo $v['controllername']; ?></td>
				<td><?php echo $v['actionname']; ?></td>
				<td><?php echo $v['parentid']; ?></td>
				<td width='240'>
                <a href="<?php echo U('edit', array('id' => $v['id']));?>" class='edit'>编辑</a>
				<a href="<?php echo U('del', array('id' => $v['id']));?>" class='del'>删除</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>