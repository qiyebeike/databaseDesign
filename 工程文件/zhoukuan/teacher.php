<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style type="text/css">
html,body{
    height:100%; 
}
body{
background:url(1.jpg) center center;
background-size:cover;
} 
a{
padding:5px 5px;
background:rgba(255,255,255,0.6);
text-decoration: none;
}
#fudaoyuan{
text-align:center;
position:fixed;
left:40%;
top:20%;
background:rgba(255,255,255,0.8);
border:2px solid #cc00ff; 
border-radius:4px;
padding:30px 30px;
}
#time{
position:fixed;
left:10%;
top:10%;
background:rgba(255,255,255,0.8);
border:2px solid #cc00ff; 
border-radius:4px;
padding:30px 30px;
}
button {
	display: inline-block;
	outline: none;
	cursor: pointer;
	text-align: center;
	text-decoration: none;
	font: 14px/100% Arial, Helvetica, sans-serif;
	padding: .5em 2em .55em;
	text-shadow: 0 1px 1px rgba(0,0,0,.3);
	-webkit-border-radius: .5em; 
	-moz-border-radius: .5em;
	border-radius: .5em;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
	box-shadow: 0 1px 2px rgba(0,0,0,.2);
}
button:hover {
	text-decoration: none;
}
button:active {
	position: relative;
	top: 1px;
}
</style>
<title>南京农业大学学生紧急请假系统</title>
<meta http-equiv="refresh" content="180;url=fudaoyuan.php">
</head>
<body>
<div id="time">
    <script>
        document.getElementById('time').innerHTML = new Date().toLocaleString()
                + ' 星期' + '日一二三四五六'.charAt(new Date().getDay());
        setInterval(
                "document.getElementById('time').innerHTML=new Date().toLocaleString()+' 星期'+'日一二三四五六'.charAt(new Date().getDay());",
                1000);
    </script>
</div>
<div id="fudaoyuan">
<h5>欢迎使用南京农业大学学生紧急请假系统！</h5>
<p><a href="tzhuxiao.php" id="zhuxiao">注销</a></p>
<?php
error_reporting(0);
session_start();
$tname=$_SESSION['tname'];
$tno=$_SESSION['tno'];
if(!$tno)
{
	echo"<p>您未登录没有权限访问此界面。</p>";
	echo"<p>正在为您跳转到登录界面，，，，，，</p>";
	header("refresh:1;url=index.php");  //跳转页面
	exit;
}
else
echo "<p>欢迎您".$tname."老师</p>";
include'link.php';
/***********寻找课程名**********/
$kn=$sql = "SELECT * FROM 教师表 WHERE 职工号='$tno'";
$re=mysql_query($sql);//向数据库发送一条sql语句
$ar=mysql_fetch_object($re);//获取数据库中的第一条信息
$km=$ar->课程名;
/***********寻找课程名***********/
$sql = "SELECT * FROM 请假表 WHERE 状态='已批准' and 任课教师='$tname' and 课程名='$km'";
$res=mysql_query($sql);//向数据库发送一条sql语句
if (mysql_num_rows($res) < 1)  //通过看结果数是否大于一来判断用户是否存在
{
	echo"目前暂无紧急请假学生！";
}
else{
	echo "目前共有".mysql_num_rows($res)."条紧急请假记录";
	$arr=mysql_fetch_object($res);//获取数据库中的第一条信息
	$sno=$arr->学号;
    $time=$arr->请假时间;
	$cause=$arr->请假原因;
	$ssql= "SELECT * FROM 学生表 WHERE 学号='$sno'";
	$sres=mysql_query($ssql);//向数据库发送一条sql语句
	$sarr=mysql_fetch_object($sres);
	$class=$sarr->班级;
	$sname=$sarr->姓名;
	echo "<br/>学号:".$sno."<br/>姓名:".$sname."<br/>班级为:".$class."的学生<br/>于:".$time."</br>在您的".$km."课上请假<br/>其请假原因:</br>".$cause."<br/>";	
}
?>
<p><a href="liaojie.php" id="liaojie">我已了解该条信息</a></p>
<script> 
var zhuxaio=document.getElementById("zhuxiao");
zhuxiao.onclick=function(e){
zhuxaio.innerHTML="注销成功!";
zhuxiao.style.background="#27cb8b";
}
var liaojie=document.getElementById("liaojie");
liaojie.onclick=function(e){
liaojie.innerHTML="了解成功!";
liaojie.style.background="#27cb8b";
}
</script> 
</div>
  </script>
<script type="text/javascript" color="0,0,255" opacity='0.7' zIndex="-2" count="99" src="dian.js"></script>
</body>
</html>