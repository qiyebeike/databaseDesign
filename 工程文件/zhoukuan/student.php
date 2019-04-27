<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style type="text/css">
html,body{
    height:100%; 
}
body{
background:url(2.jpg) center center;
background-size:cover;
} 
a{
padding:5px 5px;
background:rgba(255,255,255,0.6);
text-decoration: none;
}
#student{
text-align:center;
position:fixed;
left:35%;
top:35%;
background:rgba(255,255,255,0.85);
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
<div id="student">
欢迎您：
<?php
error_reporting(0);
session_start();
$sname=$_SESSION['sname'];
$sno=$_SESSION['sno'];
if(!$sno)
{
	echo"<p>您未登录没有权限访问此界面。</p>";
	echo"<p>正在为您跳转到登录界面，，，，，，</p>";
	header("refresh:1;url=index.php");  //跳转页面
	exit;
}
else
echo $sname;
?>
同学！
<p><a href="szhuxiao.php" id="zhuxiao">注销</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="sxiaoxi.php">消息</a></p>
<script> 
var zhuxaio=document.getElementById("zhuxiao");
zhuxiao.onclick=function(e){
zhuxaio.innerHTML="注销成功!";
zhuxiao.style.background="#27cb8b";
}
</script> 
<form method="post" action="qingjia.php">
<p><label>请假期间错过的课程:<input name="course"type="text"placeholder="课程名" required/></label></p>
<p><label>期间任课的教师:<input name="teacher"type="text"placeholder="教师名" required/></label></p>
<textarea cols="60" rows="8" name="cause" id="cause"placeholder="请假原因..." required></textarea>  
<p><button id="begin">紧急请假</button></p>
</form> 
</div>
<script type="text/javascript" color="0,0,255" opacity='0.7' zIndex="-2" count="99" src="dian.js"></script>
</body>
</html>

