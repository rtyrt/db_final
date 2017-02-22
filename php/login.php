<?php

  $account = $_REQUEST['id'];
  $password = $_REQUEST['pwd'];

  $link = mysql_connect("localhost","root","");
  mysql_select_db("taipeizoo");
  mysql_query("set names utf8");

  $data = mysql_query("select PWD from admin where U_ID = '$account'");
  $rs = mysql_fetch_row($data);

  if ($rs==0) {
    echo "<script>alert('You do not have an account.')</script>";
    header("Refresh: 0; url=../index.php");
  }

  elseif ($rs[0] == $password) {
    echo "<script>alert('Login successfully.')</script>";
    header("Refresh: 0; url=../index0.php");
  }

  elseif ($rs[0] != $password){
    echo "<script>alert('It was a wrong password, please login again.')</script>";
    header("Refresh: 0; url=../index.php");
  }

  if (!$link) {
    die('error'.mysql_error());
  }


?>
