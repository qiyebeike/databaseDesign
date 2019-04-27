<?php
include'link.php';
$username=$_POST['username'];
$passowrd=$_POST['password'];
$sql = "SELECT * FROM 用户表 WHERE 用户名='$username'";
$res=mysql_query($sql);//向数据库发送一条sql语句
if (mysql_num_rows($res) < 1)  //通过看结果数是否大于一来判断用户是否存在
{
	echo"用户名不存在";
	 header("refresh:2;url=index.php");//跳转页面
}
$arr=mysql_fetch_object($res);//获取数据库中的第一条信息
$a=$arr->密码;
$b=$arr->身份;
if($a==$passowrd)
{	
if($b=='任课教师')
{
$sql = "SELECT * FROM 教师表 WHERE 职工号='$username'";
$res=mysql_query($sql);//向数据库发送一条sql语句
$brr=mysql_fetch_object($res);//获取数据库中的第一条信息
session_start();
$_SESSION['tname']=$brr->姓名;
$_SESSION['tno']=$username;
	header("refresh:0;url=teacher.php");  //跳转页面
	exit; 
}
if($b=='学生')
{
$sql = "SELECT * FROM 学生表 WHERE 学号='$username'";
$res=mysql_query($sql);//向数据库发送一条sql语句
$brr=mysql_fetch_object($res);//获取数据库中的第一条信息
session_start();
$_SESSION['sname']=$brr->姓名;
$_SESSION['sno']=$username;
	header("refresh:0;url=student.php");  //跳转页面
}
if($b=='辅导员')
{
$sql = "SELECT * FROM 辅导员表 WHERE 职工号='$username'";
$res=mysql_query($sql);//向数据库发送一条sql语句
$brr=mysql_fetch_object($res);//获取数据库中的第一条信息
session_start();
$_SESSION['fname']=$brr->姓名;
$_SESSION['fno']=$username;
	header("refresh:0;url=fudaoyuan.php");  //跳转页面
}
}
else
{
	echo"密码不正确!";
}
exit; 
?>

