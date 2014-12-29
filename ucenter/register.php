<?php
header("content-type:text/html;charset=utf-8");
include './config.inc.php';
include './uc_client/client.php';
$uid = uc_user_register('baishuai', '123456', 'bs@qq.com');
if($uid <= 0) {
	if($uid == -1) {
		echo '用户名不合法';
	} elseif($uid == -2) {
		echo '包含要允许注册的词语';
	} elseif($uid == -3) {
		echo '用户名已经存在';
	} elseif($uid == -4) {
		echo 'Email 格式有误';
	} elseif($uid == -5) {
		echo 'Email 不允许注册';
	} elseif($uid == -6) {
		echo '该 Email 已经被注册';
	} else {
		echo '未定义';
	}
} else {
	echo '注册成功';
}
?>