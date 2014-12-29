<?php
require "sphinxapi.php";
$sphinxapi = new SphinxClient(); 
$sphinxapi->SetServer('192.168.1.2',9312);
$result = $sphinxapi->Query($_POST['keyword'],'mysql');
?>