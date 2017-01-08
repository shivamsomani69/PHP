<?php
	$conn = new mysqli("localhost" , "root" , "shubhamcs","userdata");
	if($conn->connect_error){
		die("connection failed:".$conn->connect_error);
	}
	echo "Connection established";
	$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];
	$sql = "INSERT INTO profile (name,email,gender,dob,username,password) VALUES ('$name','$email','$gender','$dob','$username','$password')";
	if($conn->query($sql) === TRUE){
		echo "Data inserted successfully";
	}
	else{
		echo "Data can not be added.";
	}
	sleep(13);
	header('Location: http://127.0.0.1/PHP/login.html');
	$conn->close();
?>
