<?php
require './source/class/class_core.php';
$discuz=C::app();
$discuz->init();
$arr = DB::fetch_all('select * from bbs_shop');
//print_r($arr);die;
require "./source/module/jifen/jifen.php";
?>
