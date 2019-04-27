<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<style type="text/css">
html,body{
    height:100%; 
}
body{
background:url(99849-106.jpg) center center;
background-size:cover;
}
#login{
text-align:center;
position:fixed;
left:40%;
top:35%;
background:rgba(255,255,255,0.8);
border:2px solid #cc00ff; 
border-radius:4px;
padding:30px 30px;
}
a{
background:rgba(192,192,192,.7);
}
a,button {
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
a,button:hover {
	text-decoration: none;
}
a,button:active {
	position: relative;
	top: 1px;
}

</style>
<title>南京农业大学学生紧急请假系统</title>
</head>
<body>
<div id="login">
<h5>欢迎使用南京农业大学学生紧急请假系统！</h5>
<form method="post" action="check.php">
<p><label>用户:<input name="username"type="text"placeholder="学号/职工号" required/></label></p>
<p><label>密码:<input name="password"type="text"placeholder="密码" required/></label></p>
<p><button>登录</button></p>
</form>
<a href="idpd.html">注册</a>   
&nbsp;
<a href="mima.php">忘记密码</a>
</div>
	<script type="text/javascript" color="0,0,255" opacity='0.7' zIndex="-2" count="99" src="dian.js"></script>
</body>
</html>