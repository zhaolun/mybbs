<?php

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

global $_G;
$plugin_config = $_G['cache']['plugin']['tyx_blackjack'];
include template('tyx_blackjack:index');
?>