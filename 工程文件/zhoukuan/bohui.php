<?php
error_reporting(0);
session_start();
$fno=$_SESSION['fno'];
if(!$fno)
{
	echo"<p>不合法的访问，为您跳转到登录界面，，，，，，</p>";
	header("refresh:1;url=index.php");  //跳转页面
	exit;
}
include'link.php';
if($_POST['bohui'])
$bohui=$_POST['bohui'];
else $bohui='暂无';
$sql = "SELECT * FROM 请假表 WHERE 状态='待审核'";
$res=mysql_query($sql);//向数据库发送一条sql语句
$arr=mysql_fetch_object($res);//获取数据库中的第一条信息
$z=$arr->请假序号;
$bh="UPDATE 请假表 SET 状态='驳回',备注='$bohui' WHERE 请假序号='$z'";
if(mysql_query($bh))
{
	echo"驳回成功,为您跳转回界面";
	header("refresh:1;url=fudaoyuan.php");  //跳转页面
}
mysql_close($conn);
?>
