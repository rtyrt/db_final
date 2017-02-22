<?php

  $event_id = $_REQUEST['insert_id'];
  $event_name = $_REQUEST['insert_name'];
  $event_sd = $_REQUEST['insert_sd'];
  $event_ed = $_REQUEST['insert_ed'];


  $link = mysql_connect("localhost","root","");
  mysql_select_db("taipeizoo");
  mysql_query("set names utf8");

  $data = mysql_query("insert into event (EV_ID, EV_Name, St_Date, En_Date) values ('$event_id', '$event_name', '$event_sd', '$event_ed' )");

  if (!$link) {
    die('error'.mysql_error());
  }

header("location:list.php"); 

?>
