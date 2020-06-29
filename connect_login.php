<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
<?php 
	session_start();
	//get value pass from in danhnhap.php
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	//to prevent injection 
	$username = stripcslashes($username); 
	$password = stripcslashes($password); 
	//connect to the server and select database 
	require_once("connect.php");
	//Query 
	$query = "SELECT *FROM thanhvien WHERE username='".$username."' AND password = '".$password."' " ;
	$user_login= mysqli_query($conn,$query); 
	if(mysqli_num_rows($user_login) > 0){
    	echo "Successs!!!" ; 
    	sleep(0.5);
	
		header("location:admin.php");

	}else {
		echo "Failed to login !";
		header("location:dangnhap.php");
	}


?>
</body>
</html>

