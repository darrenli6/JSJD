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
    
 
    
    <div class="result_wrap">
        <form action="__SELF__" method="post">
            <table class="add_tab">
                <tbody>
                     <tr>
				<td width='45%' align='right'>班级代号：</td>
				<td>
					<input type="text" name='classid'/>
				</td>
			</tr>
		   <tr>
				<td width='45%' align='right'>班级名称：</td>
				<td>
					<input type="text" name='name'/>
				</td>
			</tr>
			<tr>
				<td align='right'>专业：</td>
				<td>
					<select name="pid">
					<?php if(is_array($PData)): foreach($PData as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?>
					</select>
				</td>
			</tr>
                    <tr>
                        <th></th>
                        <td>
                            <input type="submit" value="提交">
                            <input type="button" class="back" onclick="history.go(-1)" value="返回">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</body>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-1.8.2.min.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-1.7.2.min.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/lib/jquery-validate.js'></script>
<script type="text/javascript" src='__PUBLIC__/Js/common.js'></script> 
<script type="text/javascript" src="__PUBLIC__/js/ch-ui.admin.js"></script>
</html>