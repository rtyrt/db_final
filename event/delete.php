<?php
$link = mysql_connect("localhost","root","");
mysql_select_db("taipeizoo");
mysql_query("set names utf8");
$id2 = $_GET["id"];
$data = mysql_query("delete from event where EV_ID = '$id2'");
if (!$link) {
	die('error'.mysql_error());
}

header("location:list.php");
?>
