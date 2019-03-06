<?php
	require_once 'data-access.php';
	require_once 'views/signup.php';
	if ($_SERVER['REQUEST_METHOD']=="POST") {
		$fullName = $_POST['fullName'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$found = 0;
		$query = "SELECT * FROM userinfotable";
		$connection = mysqli_connect('localhost', 'root','', 'traveldatabase');
		if($connection){
			$result = mysqli_query($connection, $query);
			mysqli_close($connection);
		}
		var_dump($result);
		$query = "INSERT INTO userinfotable values(null, '".$fullName."', '".$email."', '".$username."', '".$password."','images/user.png' )";
		$result = false;
		$connection = mysqli_connect('localhost', 'root','', 'traveldatabase');
		if($connection){
			$result = mysqli_query($connection, $query);
			mysqli_close($connection);
		}
		if ($result==1) {
			session_start();
			$_SESSION['loggedUser']['fullName']=$FullName;
			$_SESSION['loggedUser']['userName']=$Username;
			$_SESSION['loggedUser']['email']=$email;
			$_SESSION['loggedUser']['password']=$Password;
			echo "Registration successfull";
		}else{
			echo "<script>alert('Registration failed');</script>";
		}
	}
		
			
			