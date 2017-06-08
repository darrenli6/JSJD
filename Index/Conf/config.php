<?php
return array(
    //数据库配置
    'DB_HOST' => '127.0.0.1',	//数据库服务器地址
    'DB_USER' => 'root',	//数据库连接用户名
    'DB_PWD' => 'root',	//数据库连接密码
    'DB_NAME' => 'czxyjsjd', //使用数据库名称
    'DB_PREFIX' => 'czxy_',	//数据库表前缀
	'LOAD_EXT_CONFIG' => 'system',
    
    
    'UPLOAD_PATH' => './Public/Upload/',	//文件上传保存路径
    'SHOWIMAGE' => '/JSJD/Public/Upload/',	//show image path
    
    
    'UPLOAD_FILE_PATH' => './Public/Upload/File/',	//文件上传保存路径
    //自定义模版潜换
    'TMPL_PARSE_STRING' => array(
        '__PUBLIC__' => __ROOT__ . '/Index/Tpl/Public',
    ),
    
);
?>