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
 
        <div class="result_wrap">
            <!--快捷导航 开始-->
            <div class="result_content">
                <div class="short_wrap">
                    <a href="<?php echo U('addQuality',array('id'=>$sid));?>"><i class="fa fa-plus"></i>新增</a>
                    <a href="#" onclick="delall()"><i class="fa fa-recycle"></i>批量删除</a>
                </div>
            </div>
            <!--快捷导航 结束-->
        </div>

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<div class="result_wrap">
            <div class="result_content">
                <table class="list_tab">
             <tr>
             <th class="tc" width="5%"><input type="checkbox" id="all" name=""></th>
			<th>ID</th>
			<th>学号</th>
			<th>姓名</th>
			<th>时间</th>
			<th>素质拓展项目</th>
			<th>分数</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($qsData)): foreach($qsData as $key=>$v): ?><tr>
			   <td class="tc">
			   <input type="checkbox" name="id"  id="id<?php echo ($v["id"]); ?>" onclick="addchecked(<?php echo ($v["id"]); ?>)"  value="<?php echo ($v["id"]); ?>"></td>
			    <td width='50' align='center'><?php echo ($v["id"]); ?></td> 
				<td width='50' align='center'><?php echo ($v["stuid"]); ?></td>
				<td width='100'><?php echo ($v["stuname"]); ?></td>
				<td width='100'><?php echo ($v["addtime"]); ?></td>
                <td width='100'><?php echo ($v["qualityname"]); ?></td>
                <td width='100'><?php echo ($v["store"]); ?></td> 
				<td width='300' align='center'>
				<a href="<?php echo U('editQuality', array('id' => $v['id'],'sid'=>$v['sid']));?>" class='edit'>编辑</a>
				<a href="<?php echo U('delQuality', array('id' => $v['id']));?>" class='del'>删除</a> 
				 </td>
			</tr><?php endforeach; endif; ?>
		<tr height='50'>
			<td align='center' colspan='8'><?php echo ($page); ?></td>
		</tr>
		 
	</table>