<?php

  $care_id = $_REQUEST['insert_caid'];
  $animal_id = $_REQUEST['insert_aid'];
  $employee_id = $_REQUEST['insert_eid'];
  $check_date = $_REQUEST['insert_date'];
  $animal_health = $_REQUEST['insert_health'];



  $link = mysql_connect("localhost","root","");
  mysql_select_db("taipeizoo");
  mysql_query("set names utf8");

  $data = mysql_query("insert into care_record (CA_ID, A_ID, E_ID, Date, Health) values ('$care_id','$animal_id','$employee_id','$check_date','$animal_health' )");

  if (!$link) {
    die('error'.mysql_error());
  }

header("location:list.php"); 

?>
