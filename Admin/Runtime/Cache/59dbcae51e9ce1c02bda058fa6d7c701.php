<?php if (!defined('THINK_PATH')) exit();?>
 
<!DOCTYPE html>
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
			<th>党费</th>
			<th>缴纳时间</th>
			<th>备注</th>
			<th>学号--学生姓名</th>
			<th  >是否缴纳</th>
			<th width="200px">操作</th>
		</tr>
		<?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
				<td width='50' align='center'><?php echo ($v["id"]); ?></td>
				<td width='100'><?php echo ($v["feevalue"]); ?></td>
				 <td width='100'><?php echo ($v["feetime"]); ?></td>
				 <td width='100'><?php echo ($v["summary"]); ?></td>
				<td align='center'>
					 <?php echo ($v["stu_id"]); ?>----<?php echo ($v["stuname"]); ?>
				</td>
			 <td align='center'>
			<?php  echo $v['status']==1?'已缴纳':'未缴纳'; ?>
				</td>
			 
				<td width='200' align='center'>
				<!--  
				<a href="<?php echo U('sendmsg',array('id' => $v['id']));?>" >发送短信</a>
				-->
				<a href="<?php echo U('del', array('id' => $v['id']));?>" class='del'>删除</a> 
				<a href="<?php echo U('edit', array('id' => $v['id']));?>" class='edit'>编辑</a> 
				 </td>
			</tr><?php endforeach; endif; ?>
		<tr height='50'>
			<td align='center' colspan='9'><?php echo ($page); ?></td>
		</tr>
	</table>