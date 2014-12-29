<?php
header("content-type:text/html;charset=utf-8");
include './config.inc.php';
include './uc_client/client.php';
echo uc_user_synlogout($uid);
?>
<a href="login.php">登录</a>