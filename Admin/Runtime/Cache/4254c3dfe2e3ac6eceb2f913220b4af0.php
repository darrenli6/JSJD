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
					<th>班级编码</th>
					<th>班级名称</th>
					<th>专业</th>
					<th>操作</th>
                    </tr>
                    <?php if(is_array($CData)): foreach($CData as $key=>$v): ?><tr id="tr">
				<td width='50' align='center'><?php echo ($v["id"]); ?></td>
				<td width='100'><?php echo ($v["classid"]); ?></td>
				<td align='center'>
					<?php echo ($v["name"]); ?>
				</td>
				<td width='400' align='center'><?php echo ($v["pname"]); ?></td>
				<td width='100' align='center'>
				  <a href="<?php echo U('edit', array('id' => $v['id']));?>"  >修改</a>
                  <a href="<?php echo U('del', array('id' => $v['id']));?>">删除</a>
				 </td>
				</tr><?php endforeach; endif; ?>
              
                    
                </table>
  
                <div class="page_list">
                   <?php echo ($page); ?>
                </div>
            </div>
        </div>
    </form>
    <!--搜索结果页面 列表 结束-->
 </body>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-1.8.2.min.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-1.7.2.min.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-validate.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/common.js'></script> 
<script type="text/javascript" src="__PUBLIC__/js/ch-ui.admin.js"></script>
</html>