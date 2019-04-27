<?php
include'link.php';
$username=$_POST['username'];
$passowrd=$_POST['password'];
$coursename=$_POST['coursename'];
$number=$_POST['coursenumber'];
$officearea=$_POST['officearea'];
$email=$_POST['email'];
if(!$username)
{
	echo"<h2>不合法的访问！为你跳转回登录界面，，，，，，，</h2>";
    header("refresh:2;url=index.php");  //跳转页面
    exit;
}
$sq = "SELECT 用户名 FROM 用户表 ";
$re=mysql_query($sq);//向数据库发送一条sql语句
while($ar=mysql_fetch_object($re))
{
	$zgh=$ar->用户名;
	if($number==$zgh)
	{
		echo"<h1>该职工号已存在,请重新注册！</h1>";
	    header("refresh:2;url=jzhuce.php");  //跳转页面
		exit;
	}
}
$strsql="insert into 教师表 (姓名,职工号,课程名,办公室,邮箱) values('$username','$number','$coursename','$officearea','$email')";
$sql="insert into 用户表 (用户名,密码,身份) values('$number','$passowrd','任课教师')";
if(mysql_query($strsql)&&mysql_query($sql))
{
	echo"注册成功,为您跳转到登录界面";
	header("refresh:0;url=index.php");  //跳转页面
	exit;
}
?>