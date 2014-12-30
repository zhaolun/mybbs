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
$sql = <<<EOF
DROP TABLE IF EXISTS cdb_yinxingfei_zzza_time;
CREATE TABLE cdb_yinxingfei_zzza_time (
  `id` mediumint(8)  NOT NULL auto_increment,
  `zzza_uid` mediumint(8)  NOT NULL,
  `zzza_time` INT( 10 )  NOT NULL,
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS cdb_yinxingfei_zzza_fyb;
CREATE TABLE cdb_yinxingfei_zzza_fyb (
  `id` INT( 8 )  NOT NULL auto_increment,
  `uid` mediumint(8)  NOT NULL,
  `jf_all` INT( 10 )  NOT NULL,
  `lasttime` INT( 10 )  NOT NULL,
  `days` INT( 10 )  NOT NULL,
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS cdb_yinxingfei_zzza_tj;
CREATE TABLE cdb_yinxingfei_zzza_tj (
  `id` mediumint(8)  NOT NULL auto_increment,
  `data` INT( 8 )  NOT NULL,
  `uid` mediumint(8)  NOT NULL,
  `jf_jt` INT( 10 )  NOT NULL,
  `jf_name` CHAR( 15 )  NOT NULL,
  `lasttime` INT( 10 )  NOT NULL,
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS cdb_yinxingfei_zzza_rank;
CREATE TABLE cdb_yinxingfei_zzza_rank (
  `id` mediumint(8)  NOT NULL auto_increment,
  `zzza_uid` mediumint(8)  NOT NULL,
  `zzza_name` CHAR( 15 ) NOT NULL,
  `jf_jt` INT( 8 )  NOT NULL,
  `jf_all` INT( 8 )  NOT NULL,
  `cj_cs` INT( 8 )  NOT NULL,
  `zzza_lasttime` INT( 10 )  NOT NULL,
  `zzza_lasttime_u` INT( 10 )  NOT NULL,
  `lxyj` INT( 10 )  NOT NULL,
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;

DROP TABLE IF EXISTS cdb_yinxingfei_zzza_fw;
CREATE TABLE cdb_yinxingfei_zzza_fw (
  `id` INT( 8 )  NOT NULL auto_increment,
  `fwcs` INT( 8 )  NOT NULL,
  `fwbfb` INT( 8 )  NOT NULL,  
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;

INSERT INTO `cdb_yinxingfei_zzza_fw` (`id`, `fwcs`, `fwbfb`) VALUES
(1, 10, 0),
(2, 20, 80),
(3, 30, 20);

DROP TABLE IF EXISTS cdb_yinxingfei_zzza_dj;
CREATE TABLE IF NOT EXISTS `cdb_yinxingfei_zzza_dj` (
  `id` int(11) NOT NULL,
  `xx` int(11) NOT NULL,
  `sx` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) TYPE=MyISAM;


INSERT INTO `cdb_yinxingfei_zzza_dj` (`id`, `xx`, `sx`) VALUES
(1, 0, 2),
(2, 2, 3),
(3, 3, 4),
(4, 4, 5),
(5, 5, 6),
(6, 6, 7),
(7, 7, 8),
(8, 8, 9),
(9, 9, 10),
(10, 10, 11),
(11, 11, 12),
(12, 12, 13),
(13, 13, 14),
(14, 14, 15),
(15, 15, 16),
(16, 16, 17),
(17, 17, 18),
(18, 18, 19),
(19, 19, 20),
(20, 20, 999);

EOF;
runquery($sql);

$finish = TRUE;

?>