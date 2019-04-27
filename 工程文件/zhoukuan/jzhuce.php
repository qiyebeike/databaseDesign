<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style type="text/css">
html,body{
    height:100%; 
}
body{
background:url(99849-106.jpg) center center;
background-size:cover;
} 
#register{
text-align:center;
position:fixed;
left:40%;
top:35%;
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
<div id="register">
<h5>欢迎注册南京农业大学学生紧急请假系统！</h5>
<form method="post" action="jhoutai.php">
<p><label>姓名:<input name="username"type="text"placeholder="姓名" required/></label></p>
<p><label>职工号:<input name="coursenumber"type="text"placeholder="职工号" required/></label></p>
<p><label>课程名:<input name="coursename"type="text"placeholder="所任课程" required/></label></p>
<p><label>办公室:<input name="officearea"type="text"placeholder="办公室地址"></label></p>
<p><label>邮箱:<input name="email"type="text"placeholder="用于找回密码"></label></p>
<p><label>密码:<input name="password"type="text"placeholder="密码" required/></label></p>
<p><label>密码:<input name="password1"type="text"placeholder="确认密码" required/></label></p>

<p><button>注册·</button></p>
</form>
</div>
<script type="text/javascript" color="0,0,255" opacity='0.7' zIndex="-2" count="99" src="dian.js"></script>
</body>
</html>