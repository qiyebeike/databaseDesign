<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style type="text/css">
html,body{
    height:100%; 
}
body{
background:url(99849-106.jpg) ;
background-size:cover;
} 
a{
padding:5px 5px;
background:rgba(255,255,255,0.6);
text-decoration: none;
}
#sxiaoxi{
text-align:center;

left:35%;
top:1%;
background:rgba(255,255,255,0.6);
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
<div id="sxiaoxi">
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
<p><a href="student.php">点我返回</a></p>
<?php
include'link.php';
$sq = "SELECT * FROM 请假表 WHERE 学号='$sno' order by 请假序号 desc ";
$re=mysql_query($sq);//向数据库发送一条sql语句
if (mysql_num_rows($re) < 1)  //通过看结果数是否大于一来判断用户是否存在
{
	echo"目前暂无相关消息！";
}
else{
	while($ar=mysql_fetch_object($re))//获取数据库中的第一条信息
		{
    	  $zt=$ar->状态;
		  $qtime=$ar->请假时间;
		  $bz=$ar->备注;
	      if($zt=="已批准")
			  echo"你于".$qtime."的请假已被辅导员批准";
		  else if($zt=="已了解")
			   echo"你于".$qtime."的请假已被辅导员批准并被任课教师所了解";
		   else if($zt=="驳回")
		   {
			   echo"你于".$qtime."的请假很不幸被辅导员所驳回";
			   echo"<p>驳回原因:<p>".$bz."</p>";
		   }
		    else if($zt=="待审核")
			  echo"你于".$qtime."的请假仍然在审核中";
		  echo"<p> </p>";
		}
}
?>
</div>
<script type="text/javascript" color="0,0,255" opacity='0.7' zIndex="-2" count="99" src="dian.js"></script>
</body>
</html>
