<?php

  $animal_id = $_GET["tid"];
  $animal_name = $_REQUEST['update_name'];
  $animal_order = $_REQUEST['update_order'];

  $link = mysql_connect("localhost","root","");
  mysql_select_db("taipeizoo");
  mysql_query("set names utf8");

  $data = mysql_query("update animal set A_Name ='$animal_name', Orders ='$animal_order' where A_ID ='$animal_id'");

  if (!$link) {
    die('error'.mysql_error());
  }

header("location:list.php"); 

?>
