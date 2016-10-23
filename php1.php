
<?php
$conn = new mysqli('localhost','root','');
if($conn->connect_error)
{
	die('Could not connect '.mysql_error());
}
print("connected");
if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
}
echo   "<!doctype html>
		<html>
		<head>
		<title>PHP</title>
		<style>
		form{
			width:21%;
			margin:auto;
		}
		input[type = text],input[type = password]{
			width:98%;
			margin:2px;
			padding:10px;
			font-size:15px;
		}
		input[type = submit]{
			width:98%;
			margin:2px;
			padding:10px;
			font-family:sans-serif;
			font-weight:600;
		}
		span.valid{
			color:red;
			font-family: 'Economica', sans-serif;
		}
		</style>
		</head>
		<body>
		<form method = \"post\">
		<fieldset>
		<legend>Login Form</legend>
		<input type = \"text\" name = \"username\" placeholder = \"Username\"/>
		";
if(isset($_POST['submit']))
{
	if(empty($username))
	{
		echo "<span class = \"valid\">* Username is required.</span>";
	}
}
echo '<input type = "password" name = "password" placeholder = "Password"/>';
    if(isset($_POST['submit']))
	{
		if(empty($password))
		{
			echo '<span class = \"valid\">* Password is required.</span>';
		}
	}
echo   '<input type = "submit" name = "submit" />
		</fieldset>
		</form>
		</body>
		</html>'
		;
$conn->close();
?>