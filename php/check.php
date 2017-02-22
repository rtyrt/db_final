<?php

  $id = $_REQUEST['id'];
  $pwd = $_REQUEST['pwd'];

  $link = mysql_connect("localhost","root","");
  mysql_select_db("taipeizoo");
  mysql_query("set names utf8");

  $data = mysql_query("select * from employee where E_ID ='$id AND E_PWD= '$pwd'");

  if (!$link) {
    die('error'.mysql_error());
  }

  if (mysql_num_rows($data)>0) {
    header("location:index0.php"); 
  }
  else{
    header("location:index.php"); 
  }

?>
