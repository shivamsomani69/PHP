<?php
$conn = new mysqli("localhost","root","shubhamcs","userdata");
if($conn->connect_error)
{
	die("Connection Failed ".$conn->eonnect_error);
}
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM profile";
$result = $conn->query($sql);
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		if($row["username"] === $username AND $row["password"] === $password){
			echo $row["name"]."<br/>".$row["email"]."<br/>";	
			die();
		}	
	}
}
echo "User with following credential does not exist.";
?>
