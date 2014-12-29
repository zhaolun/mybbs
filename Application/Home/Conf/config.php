<?php
$ip=['14','19'];
$pwd=['root','940614'];
$dk=['3307','3306'];
$key=rand(0,1);
$yip=$ip[$key];
$ypwd=$pwd[$key];
$ydk=$dk[$key];
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => '192.168.1.'.$yip, // 服务器地址
	'DB_NAME'   => 'bbs', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => $ypwd, // 密码
	'DB_PORT'   => $ydk, // 端口
	'DB_PREFIX' => 'bbs_', // 数据库表前缀
	'DB_CHARSET'=> 'utf8', //字符集
	'LAYOUT_ON'=>true,
	'LAYOUT_NAME'=>'layout',
    //'URL_HTML_SUFFIX' => 'html|shtml|xml' , //开启伪静态
	//'URL_MODEL'=>2,

);