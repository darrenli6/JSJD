<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
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
    
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /> 
        <!--搜索结果页面 列表 开始-->
 
        <div class="result_wrap">
            <!--快捷导航 开始-->
            <div class="result_content">
                <div class="short_wrap">
                     
                </div>
            </div>
            <!--快捷导航 结束-->
        </div>

        <div class="result_wrap">
            <div class="result_content">
                <table class="list_tab">
                    <tr>
			<th>ID</th>
			<th>联系方式</th>
			<th>Email</th>
			<th>内容</th>
			<th>时间</th>
			<th>学号/匿名</th>
			 
				<th>操作</th>
			 
		</tr>
		<?php if(is_array($fData)): foreach($fData as $key=>$v): ?><tr>
			
				<td width='50' align='center'><?php echo ($v["id"]); ?></td>
				<td width='120' align='center'><?php echo ($v["phone"]); ?></td>
				<td width='120' align='center'><?php echo ($v["email"]); ?></td>
				<td align='center'>
					<?php echo ($v["content"]); ?>
				</td>
				<td align='center'><?php echo (date('y-m-d H:i', $v["addtime"])); ?></td>
				<td align='center'><?php echo ($v["username"]); ?></td>
				 
			 <td>
				<a href='<?php echo U("del", array("id" => $v["id"]));?>' class='del'>删除</a>
				</td>
			</tr><?php endforeach; endif; ?>
	</table>
 
</body>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-1.8.2.min.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-1.7.2.min.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-validate.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/common.js'></script> 
<script type="text/javascript" src="__PUBLIC__/js/ch-ui.admin.js"></script>
</html>