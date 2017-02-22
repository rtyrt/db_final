<?php

  $employee_id = $_REQUEST['insert_id'];
  $employee_name = $_REQUEST['insert_name'];
  $employee_sex = $_REQUEST['insert_sex'];
  $employee_phone = $_REQUEST['insert_phone'];
  $employee_age = $_REQUEST['insert_age'];
  $employee_did = $_REQUEST['insert_did'];


  $link = mysql_connect("localhost","root","");
  mysql_select_db("taipeizoo");
  mysql_query("set names utf8");

  $data = mysql_query("insert into employee (E_ID, E_Name, Sex, Phone, Age, D_ID) values ('$employee_id','$employee_name','$employee_sex','$employee_phone','$employee_age','$employee_did' )");

  if (!$link) {
    die('error'.mysql_error());
  }

header("location:list.php"); 

?>
