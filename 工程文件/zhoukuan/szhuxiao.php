<?php
error_reporting(0);
session_start();
unset($_SESSION['sname']);
unset($_SESSION['sno']);
header("refresh:0;url=index.php");  //跳转页面
?>