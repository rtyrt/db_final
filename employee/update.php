<?php

  $employee_id = $_GET["tid"];
  $employee_name = $_REQUEST['update_name'];
  $employee_sex = $_REQUEST['update_sex'];
  $employee_phone = $_REQUEST['update_phone'];
  $employee_age = $_REQUEST['update_age'];
  $employee_did = $_REQUEST['update_did'];


  $link = mysql_connect("localhost","root","");
  mysql_select_db("taipeizoo");
  mysql_query("set names utf8");

  $data = mysql_query("update employee set E_Name ='$employee_name', Sex ='$employee_sex', Phone ='$employee_phone', Age ='$employee_age', D_ID ='$employee_did' where E_ID ='$employee_id'");

  if (!$link) {
    die('error'.mysql_error());
  }

header("location:list.php"); 

?>
