<html>
<head profile="http://www.w3.org/2005/10/profile">
<link rel="icon" 
      type="image/png" 
      href="http://bbqfrc.x10host.com/favicon.png">
<link rel="stylesheet" href="../../styler.css">
</head>
<body>
<?php
	error_reporting(E_ALL ^ E_NOTICE);
	session_start();
if($_SESSION['user']=='bbqadmin')
{

	include("../connect.php");
	
?>

	<title>BBQ MUI</title>
<div id="container">
	<div class="nav">
			<a href="../../index.php" class="nav"></a>
	</div>
	<br><br><br><br>
	<br>
	<a href="../index.php" class="fade">Go Back</a>
	
	<br>
	<h1>BBQ Manual Update Interface - Team Data</h1>
	
	<table class="mainpage">
		<tr>
			<td>
				<div>
					<a href="create_new_table.php" class="fade">Create Next Year's Table</a>
				</div>
			</td>
		</tr>
		
	</table>

<?php
}
else
{
	echo "Access Denied for non-admin.";
}
?>