<?php

  $care_id = $_GET["tid"];
  $animal_id = $_REQUEST['update_aid'];
  $employee_id = $_REQUEST['update_eid'];
  $check_date = $_REQUEST['update_date'];
  $animal_health = $_REQUEST['update_health'];


  $link = mysql_connect("localhost","root","");
  mysql_select_db("taipeizoo");
  mysql_query("set names utf8");

  $data = mysql_query("update care_record set  A_ID ='$animal_id', E_ID ='$employee_id', Date ='$check_date', Health ='$animal_health', where CA_ID ='$care_id'");

  if (!$link) {
    die('error'.mysql_error());
  }

header("location:list.php"); 

?>
