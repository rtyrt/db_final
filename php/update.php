<?php

  $animal_id = $_REQUEST['update_id'];
  $animal_name = $_REQUEST['update_name'];
  $animal_order = $_REQUEST['update_order'];

  $link = mysql_connect("localhost","root","");
  mysql_select_db("taipeizoo");
  mysql_query("set names utf8");

  $data = mysql_query("update animal where A_Name ='$update_name', Orders ='$update_order' where A_ID ='$update_id'");

  if (!$link) {
    die('error'.mysql_error());
  }

header("location:list.php"); 

?>
