<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); 
0
<<<<<<< HEAD
|| checktplrefresh('./template/default/home/spacecp_header.htm', './template/default/home/spacecp_header_name.htm', 1419477406, '1', './data/template/1_1_home_spacecp_header.tpl.php', './template/default', 'home/spacecp_header')
|| checktplrefresh('./template/default/home/spacecp_header.htm', './template/default/home/spacecp_header_name.htm', 1419477406, '1', './data/template/1_1_home_spacecp_header.tpl.php', './template/default', 'home/spacecp_header')
=======
|| checktplrefresh('./template/default/home/spacecp_header.htm', './template/default/home/spacecp_header_name.htm', 1419470738, '1', './data/template/1_1_home_spacecp_header.tpl.php', './template/default', 'home/spacecp_header')
|| checktplrefresh('./template/default/home/spacecp_header.htm', './template/default/home/spacecp_header_name.htm', 1419470738, '1', './data/template/1_1_home_spacecp_header.tpl.php', './template/default', 'home/spacecp_header')
>>>>>>> 84365c20ffa42cb13cce8f438101fb85161020e7
;?>
<div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="home.php?mod=spacecp">设置</a> <em>&rsaquo;</em><?php if($actives['profile']) { ?>
个人资料
<?php } elseif($actives['verify']) { ?>
认证
<?php } elseif($actives['avatar']) { ?>
修改头像
<?php } elseif($actives['credit']) { ?>
积分
<?php } elseif($actives['usergroup']) { ?>
用户组
<?php } elseif($actives['privacy']) { ?>
隐私筛选
<?php } elseif($actives['sendmail']) { ?>
邮件提醒
<?php } elseif($actives['password']) { ?>
密码安全
<?php } elseif($actives['promotion']) { ?>
访问推广
<?php } elseif($actives['plugin']) { ?>
<?php echo $_G['setting']['plugins'][$pluginkey][$_GET['id']]['name'];?>
<?php } ?></div>
</div>
<div id="ct" class="ct2_a wp cl">
<div class="mn">
<div class="bm bw0">
<h1 class="mt"><?php if($actives['profile']) { ?>
个人资料
<?php } elseif($actives['verify']) { ?>
认证
<?php } elseif($actives['avatar']) { ?>
修改头像
<?php } elseif($actives['credit']) { ?>
积分
<?php } elseif($actives['usergroup']) { ?>
用户组
<?php } elseif($actives['privacy']) { ?>
隐私筛选
<?php } elseif($actives['sendmail']) { ?>
邮件提醒
<?php } elseif($actives['password']) { ?>
密码安全
<?php } elseif($actives['promotion']) { ?>
访问推广
<?php } elseif($actives['plugin']) { ?>
<?php echo $_G['setting']['plugins'][$pluginkey][$_GET['id']]['name'];?>
<?php } ?></h1>
<!--don't close the div here-->