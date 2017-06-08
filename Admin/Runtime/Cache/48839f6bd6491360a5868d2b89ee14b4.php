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
			<th>管理员名称</th>
			<th>角色</th>
			<th>最后登录时间</th>
			<th>最后登录IP</th>
			<th colspan="2">账号状态</th>
			<?php if($_SESSION["adminusername"]=="admin"): ?><th>操作</th><?php endif; ?>
		</tr>
		<?php if(is_array($admin)): foreach($admin as $key=>$v): ?><tr>
				<td width='50' align='center'><?php echo ($v["id"]); ?></td>
				<td width='120' align='center'><?php echo ($v["adminusername"]); ?></td>
				<td align='center'>
					<?php echo ($v["rname"]); ?>
				</td>
				<td align='center'><?php echo (date('y-m-d H:i', $v["lasttime"])); ?></td>
				<td align='center'><?php echo ($v["lastip"]); ?></td>
				<td width='60' align='center'>
					<?php if($v["locked"]): ?>锁定
					<?php else: ?>
					开放<?php endif; ?>
				</td>
				<?php if($_SESSION["adminusername"]=="admin"): ?><td width='240'>
						<?php if($v["adminusername"]=="admin"): else: ?>
						   <?php if($v["locked"]): ?><a href="<?php echo U('lockAdmin', array('id' => $v['id'], 'locked' => 0));?>" class='add lock'>解除锁定</a>
							<?php else: ?>
								<a href="<?php echo U('lockAdmin', array('id' => $v['id'], 'locked' => 1));?>" class='add lock'>锁定用户</a><?php endif; endif; ?>
					</td><?php endif; ?>
				<td>
				<?php if($v["adminusername"]=="admin"): else: ?>
				<a href='<?php echo U("edit", array("id" => $v["id"]));?>' class='edit'>编辑</a>
				<a href='<?php echo U("del", array("id" => $v["id"]));?>' class='del'>删除</a><?php endif; ?>
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