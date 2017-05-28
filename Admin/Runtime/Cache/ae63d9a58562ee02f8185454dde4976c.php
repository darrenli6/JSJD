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
			<th>上传日期</th>
			<th>学号姓名</th>
			<th colspan="2">状态</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($PData)): foreach($PData as $key=>$v): ?><tr>
			<td class="tc"><input type="checkbox" name="id"  id="id<?php echo ($v["id"]); ?>" onclick="addchecked(<?php echo ($v["id"]); ?>)"  value="<?php echo ($v["id"]); ?>"></td>
				<td width='50' align='center'><?php echo ($v["id"]); ?></td>
				<td width='100'><?php echo ($v["title"]); ?></td>
				<td align='center'>
					<?php echo (date('y-m-d H:i', $v["papertime"])); ?>
				</td>
				<td>
				 13407216---李佳
				</td>
				<td>
				<?php if($v["isverify"]): ?>通过
	          <?php else: ?> 未通过<?php endif; ?></td>
				<td width='100' align='center'>
					<?php if($v["isverify"]): ?><a href="<?php echo U('unverify', array('id' => $v['id'], 'isverify' => 0));?>" class='add lock'>不通过</a>
					<?php else: ?>
						<a href="<?php echo U('verify', array('id' => $v['id'], 'isverify' => 1));?>" class='add lock'>通过</a><?php endif; ?>
				</td>
				<td width='100' align='center'>
				<a href="<?php echo ($path); echo ($v["paperurl"]); ?>" class='down_file'>下载</a>
				<a href="<?php echo U('del', array('id' => $v['id']));?>" class='del'>删除</a> 
				 </td>
			</tr><?php endforeach; endif; ?>
		<tr height='50'>
			<td align='center' colspan='8'><?php echo ($page); ?></td>
		</tr>
	</table>