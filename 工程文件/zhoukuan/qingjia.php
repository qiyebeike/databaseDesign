
<?php
include'link.php';
date_default_timezone_set('prc');
session_start();
$sno=$_SESSION['sno'];
$course=$_POST['course'];
$number=$_POST['number'];
$teacher=$_POST['teacher'];
$cause=$_POST['cause'];
$time=date("Y-m-d H:i:s");
/********序号********/
$sql = "SELECT * FROM 请假表";
$res=mysql_query($sql);
$xuhao=mysql_num_rows($res);
if(mysql_num_rows($res)<1)
	$xuhao=0;
/*******序号*********/
$strsql="insert into 请假表 (请假时间,任课教师,课程名,学号,请假原因,请假序号) values('$time','$teacher','$course','$sno','$cause','$xuhao')";

$cs = "SELECT * FROM 学生表 where 学号='$sno'";
$re=mysql_query($cs);
$a=mysql_fetch_object($re);
$c=$a->请假次数;
$c+=1;
$csx="UPDATE 学生表 SET 请假次数='$c'WHERE 学号='$sno'";
if(mysql_query($strsql)&&mysql_query($csx))
{
	echo"请假成功,为您跳转回界面";
	header("refresh:1;url=student.php");  //跳转页面
}
?>
