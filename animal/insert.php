<?php

  $animal_id = $_REQUEST['insert_id'];
  $animal_name = $_REQUEST['insert_name'];
  $animal_order = $_REQUEST['insert_order'];

  $link = mysql_connect("localhost","root","");
  mysql_select_db("taipeizoo");
  mysql_query("set names utf8");

  $data = mysql_query("insert into animal (A_id, A_Name, Orders) values ('$animal_id', '$animal_name', '$animal_order' )");

  if (!$link) {
    die('error'.mysql_error());
  }

header("location:list.php"); 

?>
