<?php

  $event_id = $_GET["tid"];
  $event_name = $_REQUEST['update_name'];
  $event_sd = $_REQUEST['update_sd'];
  $event_ed = $_REQUEST['update_ed'];


  $link = mysql_connect("localhost","root","");
  mysql_select_db("taipeizoo");
  mysql_query("set names utf8");

  $data = mysql_query("update event set EV_Name ='$event_name', St_Date ='$event_sd', En_Date = '$event_ed' where EV_ID ='$event_id'");

  if (!$link) {
    die('error'.mysql_error());
  }

header("location:list.php"); 

?>
