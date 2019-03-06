<?php
	require_once 'data-access.php';
	$query = "SELECT * FROM imagetable";
	$imageList = executeQuery($query);
	require_once 'views/searched.php';
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (isset($_POST['signup'])) {
			$fullName = $_POST['fullName'];
			$email = $_POST['email'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$found = false;
			$query = "SELECT * FROM userinfotable";
			$connection = mysqli_connect('localhost', 'root','', 'traveldatabase');
			if($connection){
				$result = mysqli_query($connection, $query);
				mysqli_close($connection);
			}
			while ($row = mysqli_fetch_assoc($result)) {
				if ($row['EmailAddress'] == $email) {
					echo "<script>alert('Email already used');</script>";
					$found = true;
					break;
				}else if ($row['Username'] == $username) {
					echo "<script>alert('Username already used');</script>";
					$found = true;
					break;
				}
			}

			if ($found==false) {
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
					echo "<script> alert('registration successfull'); </script>";
				}else{
					echo "<script>alert('Registration failed');</script>";
				}
			}
		}else if (isset($_POST['login'])) {
			$username = $_POST['username'];
			$pass = $_POST['password'];
			$query = "SELECT * FROM userinfotable";
			$result = executeQuery($query);
			while ($row = mysqli_fetch_assoc($result)) {
				if ($row['Username'] == $username) {
					session_start();
					$_SESSION['loggedUser']['userId']=$row['userID'];
					$_SESSION['loggedUser']['fullName']=$row['FullName'];
					$_SESSION['loggedUser']['userName']=$row['Username'];
					$_SESSION['loggedUser']['email']=$row['EmailAddress'];
					$_SESSION['loggedUser']['password']=$row['Password'];
					$_SESSION['loggedUser']['propic']=$row['ProfilePic'];
					header("location: user-home.php");
				}
			}
			echo "<script>alert('Wrong username or password');</script>";
		}
	}
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		if (isset($_POST['searchBtn'])) {
			$search = $_POST['search'];
			$query = "SELECT * FROM imagetable";
			if ($_POST['search']!=null) {
				$query = $query. " where ImagePath like '%".$_POST['search']."%' OR ImageLocation like '%".$_POST['search']."%' OR Tag like '%".$_POST['search']."%'";
				$imageList = executeQuery($query);
				header("Location: searched.php");
				
			}
		}
	}