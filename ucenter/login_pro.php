<?php
header("content-type:text/html;charset=utf-8");
include './config.inc.php';
include './uc_client/client.php';
list($uid, $username, $password, $email) = uc_user_login($_POST['username'], $_POST['password']);
if($uid > 0) {
	////setcookie('Example_auth', '', -86400);
	//setcookie('Example_auth', uc_authcode($uid."\t".$username, 'ENCODE'));
	//$ucsynlogin = uc_user_synlogin($uid);
	//var_dump($uid);
	//var_dump($username);
	echo uc_user_synlogin($uid);
	echo '登录成功，<a href="loginout.php">退出</a>';
} elseif($uid == -1) {
	echo '用户不存在,或者被删除';
} elseif($uid == -2) {
	echo '密码错';
} else {
	echo '未定义';
}
?>