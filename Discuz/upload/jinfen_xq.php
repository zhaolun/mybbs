<?php
require './source/class/class_core.php';
$discuz=C::app();
$discuz->init();
$id = $_GET['id'];
$rs = DB::fetch_first("select * from bbs_shop where id=$id");
//$arr = DB::fetch_all("select * from bbs_shop where id=$_GET['id']");
//print_r($rs);die;



require "./source/module/jifen/jifen_xq.php";
?>
