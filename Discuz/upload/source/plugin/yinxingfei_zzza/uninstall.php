<?php
/**
 *      本程序由尹兴飞开发
 *      若要二次开发或用于商业用途的，需要经过尹兴飞同意。
 *
 *		http://app.yinxingfei.com			插件技术支持
 *
 *		http://www.cglnn.com			    插件演示站点
 *
 ->		==========================================================================================
 *
 *      2014-11-01 开始由6.1升级到6.2！
 *
 *		愿我的同学、家人、朋友身体安康，天天快乐！
 ->		同时也祝您使用愉快！
 */
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
DB::query("DROP TABLE IF EXISTS ".DB::table('yinxingfei_zzza_rank')."");
DB::query("DROP TABLE IF EXISTS ".DB::table('yinxingfei_zzza_fw')."");
DB::query("DROP TABLE IF EXISTS ".DB::table('yinxingfei_zzza_time')."");
DB::query("DROP TABLE IF EXISTS ".DB::table('yinxingfei_zzza_tj')."");
DB::query("DROP TABLE IF EXISTS ".DB::table('yinxingfei_zzza_fyb')."");
DB::query("DROP TABLE IF EXISTS ".DB::table('yinxingfei_zzza_dj')."");
$finish = TRUE;
?>