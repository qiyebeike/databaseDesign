<?php
error_reporting(0);
session_start();
unset($_SESSION['tname']);
unset($_SESSION['tno']);
header("refresh:0;url=index.php");  //跳转页面
?>