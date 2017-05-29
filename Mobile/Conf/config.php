<?php
return array(

	//数据库配置
	'DB_HOST' => '127.0.0.1',	//数据库服务器地址
	'DB_USER' => 'root',	//数据库连接用户名
	'DB_PWD' => 'root',	//数据库连接密码
	'DB_NAME' => 'czxyjsjd', //使用数据库名称
	'DB_PREFIX' => 'czxy_',	//数据库表前缀
     
    //图片上传
    'UPLOAD_MAX_SIZE' => 2000000,	//最大上传大小
    'UPLOAD_PATH' => './Public/Upload/',	//文件上传保存路径
    'SHOWIMAGE' => '/JSJD/Public/Upload/',	//show image path
     
    'UPLOAD_FILE_PATH' => './Public/Upload/File/',	//文件上传保存路径
    'DOWNFILE' => '/JSJD/Public/Upload/File/',	//show image path
    'UPLOAD_EXTS' => array('jpg', 'jpeg', 'gif', 'png'),	//允许上传文件的后缀
    //用于异位或加密的KEY
    'ENCTYPTION_KEY' => 'darren',
    //自动登录保存时间
    'AUTO_LOGIN_TIME' => time() + 3600 * 24 * 7,	//一个星期
     
     //download common xls
     'UPLOADEXCEL'  =>'./Public/Upload/xls/',
    'DOWNCOMMONFILE'=>'/JSJD/Public/Download/',
    
	//自定义模版潜换
	'TMPL_PARSE_STRING' => array(
		'__PUBLIC__' => __ROOT__ . '/Mobile/Tpl/Public',
		),
    
    
    //加载扩展配置
    'LOAD_EXT_CONFIG' => 'system',
);
?>