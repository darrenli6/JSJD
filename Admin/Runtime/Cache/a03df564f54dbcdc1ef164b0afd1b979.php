<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="__PUBLIC__/css/ch-ui.admin.css">
	<link rel="stylesheet" href="__PUBLIC__/font/css/font-awesome.min.css">
    
</head>
<body>
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="<?php echo U('Index/copy');?>">首页</a> 
    </div>
    <!--面包屑导航 结束-->
 
    
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
    <script type="text/javascript" src="__PUBLIC__/js/jquery.js">
    
    </script>
    
    <script type="text/javascript" src="__PUBLIC__/js/ch-ui.admin.js"></script>
    
  <!--导入在线编辑器 -->
<link href="__PUBLIC__/umeditor1_2_2-utf8-php/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<script type="text/javascript" charset="utf-8" src="__PUBLIC__/umeditor1_2_2-utf8-php/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="__PUBLIC__/umeditor1_2_2-utf8-php/umeditor.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/umeditor1_2_2-utf8-php/lang/zh-cn/zh-cn.js"></script>
<script>
UM.getEditor('context', {
	initialFrameWidth : "80%",
	initialFrameHeight : 350
});
</script>
<script type="text/javascript"> var SHOWIMAGE="/JSJD/Public/Upload/";
                                var delallurl="<?php echo U('delall');?>";
</script>	
    <script type="text/javascript" src="__PUBLIC__/js/delall.js"></script>
</html>