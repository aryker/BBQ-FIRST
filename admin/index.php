<?php
	error_reporting(E_ALL ^ E_NOTICE);
	session_start();
if($_SESSION['user']=='bbqadmin')
{
	header("Location: adpanel.php");
}
else
{
?>
<html>
<head profile="http://www.w3.org/2005/10/profile">
<link rel="icon"
      type="image/png"
      href="http://bbqfrc.x10host.com/favicon.png">
<link rel="stylesheet" href="../styler.css">
<title>Admin Login</title>
</head>

<body>
<div class="container">
	<div class="nav">
			<a href="../index.php" class="nav">
			</a> 
	<!--		<a href="help.html" class="nav_txt">
				Help	
			</a>  !-->
	</div>
	
	<style>
body
{
background-color:#000;
}
/*
div
{
width:370px;
margin: 0 auto;
float:center;
background-color:#1F1F1F;
padding:15px;
border-radius:10px;
} */
.container,.nav,.site_footer
{
border-radius:0px;
}
div#center
{
width: 200;
margin: 0 auto;
background-color: transparent;
padding:0px;
border-radius:0px;
}
form
{
width:200px;
margin: 0 auto;
float:center;
}
input
{
width:100%;
margin: 0 auto;
padding:5px;
margin:2px;
}
input[type="submit"]
{
background-color:#1F1F1F;
border:1px transparent solid;
border-radius:5px;
outline-color:transparent;
color:#FFF;
}
input[type="submit"]:hover
{
background-color:#3F3F3F;
border:1px transparent solid;
border-radius:5px;
outline-color:transparent;
color:#FFF;
}
h1
{
color:#FFF;
margin: 0 auto;
}
img
{
width:200px;
height:200px;
}
</style>
<body>
<br><br><br><br>
<div class="center"><img src="../bbqcode.gif"/></div>
<br>
	<div>
		<form method="post" action="loginadmin.php">
			<td><input type="text" name="user" placeholder="User"/><br>
			<input type="password" name="pass" placeholder="Password"/><br>
			<input class="sub" type="submit" value="Login"/>
		</form>
	</div>

	<br>
	
	 </div>
</body>

</html>
<?php
}
?>