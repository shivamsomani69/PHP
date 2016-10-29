<?php
$username = $_POST['username'];
$password = $_POST['password'];
$conn  = new mysqli('localhost','root','mysql','project1');
if($conn->connect_errno){
	die("Can not connected.......");
}
else
{
	echo "connected...";
	//$query = "SELECT * FROM userdata WHERE username = $username AND password = $password";
	if($conn->query("SELECT * FROM userdata WHERE username = $username AND password = $password")===true){
		echo "Query successfully applied.";
		$result = conn->query($conn,$query);
		echo $result;
	}
}
$conn->close();
?>