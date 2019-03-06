<?php
	require_once 'data-access.php';
	session_start();
	if ($_SESSION['loggedUser']) {
		require_once 'views/user-profile.php';
		if ($_SERVER['REQUEST_METHOD']=="POST") {
			if (isset($_POST['change'])) {
				$target_dir = "images/";
				$temp = $_FILES['propic']['type'];
				$a = explode("/",$temp);
				$target_file = $target_dir.$_SESSION['loggedUser']["userId"].rand(10,10000).".".end($a);
				if($a[0] !="image"){
					echo "Select a image file";
				}
				else if (file_exists($target_file)) {
					echo "Sorry, file already exists<br>";
				}
				else if ($_FILES["propic"]["size"] > 50000000) {
					echo "File size exceeded<br>";
				}
				else{
					if(move_uploaded_file($_FILES["propic"]["tmp_name"], $target_file)) {
						echo $sql ="update userinfotable set ProfilePic='".$target_file."' WHERE userID=".$_SESSION['loggedUser']["userId"]; 
						$conn = mysqli_connect("localhost", "root", "", "traveldatabase");		
						if (!$conn) {
							die("Connection failed: " . mysqli_connect_error());
						}
						if (mysqli_query($conn, $sql)) {
							echo "Profile Picture updated successfully";
							$_SESSION['loggedUser']['propic']=$target_file;
							header('Location: user-profile.php');
						} else {
							echo "Error: " . $sql . "<br>" . mysqli_error($conn);
						}
						
						echo "The file ".  $_FILES["propic"]["name"]. " has been uploaded<br>";
					}else {
						echo "Sorry, there was an error uploading your file<br>";
					}
				}
			}
			elseif (isset($_POST['passChange'])) {
				$pass = $_POST['oldPassword'];
				$newPass1 = $_POST['newPassword'];
				$newPass2 = $_POST['newPassword2'];
				if ($newPass1 != $newPass2) {
					echo "Password not matched";
				}else{
					$query = "UPDATE userinfotable SET Password='".$newPass1."' WHERE userID=".$_SESSION['loggedUser']['userId'];
					if (executeNonQuery($query)==1) {
						echo "Password changed";
					}else{
						echo "Sry, something went wrong";
					}
				}
			}
		}
	}else{
		header("location: index.php");
	}