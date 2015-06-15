<?php
return array(
	/*数据库设置*/
	'DB_TYPE' => 'mysql',
	'DB_HOST' => 'localhost',
	'DB_NAME' => 'doyourlove',
	'DB_USER' => 'root',
	'DB_PWD' => 'hzc8730672',
	'DB_PORT' => '3306',
	'DB_PREFIX' => '',
	'DB_CHARSET'=> 'utf8',

	'URL_MODEL'             =>  '2', // URL访问模式,可选参数0、1、2、3,代表以下四种模式：0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式

	// 定义错误跳转页面URL地址
	// 'ERROR_PAGE'=> MODULE_PATH.'View/Public/error.html' ,

	//默认开启session
	'SESSION_AUTO_START' => true,
);