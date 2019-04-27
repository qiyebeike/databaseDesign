<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style type="text/css">
html,body{
    height:100%; 
}
body{
background:url(3.jpg) center center;
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
top:10%;
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
欢迎您:
<?php
error_reporting(0);
session_start();
$fname=$_SESSION['fname'];
$fno=$_SESSION['fno'];
if(!$fno)
{
	echo"<p>您未登录没有权限访问此界面。</p>";
	echo"<p>正在为您跳转到登录界面，，，，，，</p>";
	header("refresh:1;url=index.php");  //跳转页面
	exit;
}
else
echo $fname;
?>
辅导员！
<p><a href="fzhuxiao.php" id="zhuxiao">注销</a></p>
<script> 
var zhuxiao=document.getElementById("zhuxiao");
zhuxiao.onclick=function(e){
zhuxiao.innerHTML="注销成功!";
zhuxiao.style.background="#27cb8b";

}
</script> 
<?php
include'link.php';
$sql = "SELECT * FROM 请假表 WHERE 状态='待审核'";
$res=mysql_query($sql);//向数据库发送一条sql语句
if (mysql_num_rows($res) < 1)  //通过看结果数是否大于一来判断用户是否存在
{
	echo"目前暂无紧急请假学生！";
}
else{
    echo "目前共有".mysql_num_rows($res)."条紧急请假记录待审核";
	$arr=mysql_fetch_object($res);//获取数据库中的第一条信息	
    $sno=$arr->学号;
	$time=$arr->请假时间;
    $cause=$arr->请假原因;
    $ssql= "SELECT * FROM 学生表 WHERE 学号='$sno'";
	$sres=mysql_query($ssql);//向数据库发送一条sql语句
	$sarr=mysql_fetch_object($sres);
	$class=$sarr->班级;
	$sname=$sarr->姓名;
    $crdit=$sarr->请假次数;
	echo "<br/>学号:".$sno."<br/>姓名:".$sname."<br/>班级:".$class."<br/>请假时间:".$time."<br/>请假原因:".$cause."<br/>历史请假次数:".$crdit."<br/>";
}
?>
<p><a href="pizhun.php" id="pizhun">批准</a></p>

<form method="post" action="bohui.php">
<textarea cols="40" rows="4" name="bohui" placeholder="驳回原因（非必填）..."></textarea>  
<p><button id="begin">驳回</button></p>



<script> 
var pizhun=document.getElementById("pizhun");
var bohui=document.getElementById("bohui");

pizhun.onclick=function(e){
//e.preventDefault();
pizhun.innerHTML="批准成功!";
pizhun.style.background="#27cb8b";
}
</script>
 </div>
</script>
<script type="text/javascript" color="0,0,255" opacity='0.7' zIndex="-2" count="99" src="dian.js"></script>
</body>
</html>