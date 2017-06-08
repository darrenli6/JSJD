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
					<th>部门名称</th>
					<th>部门logo</th>
					<th>操作</th>
                    </tr>
                  <?php if(is_array($DData)): foreach($DData as $key=>$v): ?><tr id="tr">
 
				<td width='50' align='center'><?php echo ($v["id"]); ?></td>
				<td width='100'><?php echo ($v["departname"]); ?></td>
				<td align='center'>
					<img width='120' height='120' src="<?php echo ($path); echo ($v["departlogo"]); ?>"/>
				</td>
				<td width='100' align='center'>
				  <a href="<?php echo U('edit', array('id' => $v['id']));?>"  >修改</a>
                  <a href="<?php echo U('del', array('id' => $v['id']));?>" onclick="javascript:return confirm('确定删除吗?');" >删除</a>
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


 
    <script type="text/javascript">
      var delallurl="<?php echo U('delall');?>";
    </script>
    <script type="text/javascript" src="__PUBLIC__/js/delall.js"></script>
 </body>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-1.8.2.min.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-1.7.2.min.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-validate.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/common.js'></script> 
<script type="text/javascript" src="__PUBLIC__/js/ch-ui.admin.js"></script>
</html>