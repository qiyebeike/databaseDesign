<?php
error_reporting(0);
session_start();
unset($_SESSION['fname']);
unset($_SESSION['fno']);
header("refresh:0;url=index.php");  //跳转页面
?>