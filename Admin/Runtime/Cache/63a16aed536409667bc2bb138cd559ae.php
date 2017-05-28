<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="__PUBLIC__/css/ch-ui.admin.css">
	<link rel="stylesheet" href="__PUBLIC__/font/css/font-awesome.min.css">
</head>
<body>
 
 

	
    <div class="result_wrap">
        <div class="result_title">
            <h3>系统基本信息</h3>
        </div>
        <div class="result_content">
        	 
            <ul>
                <li>
                    <label>操作系统</label><span><?php echo (PHP_OS); ?></span>
                </li>
                <li>
                    <label>运行环境</label><span><?php echo ($_SERVER['SERVER_SOFTWARE']); ?></span>
                </li>
                <li>
                    <label>PHP运行方式</label><span><?php echo (PHP_VERSION); ?></span>
                </li>
                <li>
                    <label>Mysql-版本</label><span><?php echo mysql_get_server_info();?></span>
                </li>
                
                <li>
                    <label>北京时间</label><span><?php echo date('Y-m-d H:i:s'); ?></span>
                </li>
           
                
                <li>
                    <label>上一次登录时间</label><span><?php echo ($_SESSION['lasttime']); ?></span>
                </li>
                <li>
                    <label>上一次登录登录IP</label><span><?php echo ($_SESSION['lastip']); ?></span>
                </li>
                 
                <li>
                    <label>本次登录时间</label><span><?php echo ($_SESSION['now']); ?></span>
                </li>
                <li>
                    <label>本次登录登录IP</label><span><?php echo get_client_ip();?></span>
                </li>
            </ul>
        </div>
    </div>


 

</body>
</html>