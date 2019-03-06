<?php
	session_start();
	if (isset($_SESSION['loggedUser'])) {
		require_once 'views/upload-photo.php';
		if ($_SERVER['REQUEST_METHOD']=="POST") {
			$target_dir = "images/";
			$temp = $_FILES['image']['type'];
			$a = explode("/",$temp);
			$target_file = $target_dir.$_REQUEST['location'].rand(10,10000).".".end($a);
			if($a[0] !="image"){
				echo "Select a image file";
			}
			else if (file_exists($target_file)) {
				echo "Sorry, file already exists<br>";
			}
			else if ($_FILES["image"]["size"] > 500000000) {
				echo "File size exceeded<br>";
			}
			else{
				if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
					$sql="INSERT INTO imagetable (UserID, ImagePath, ImageLocation, Tag)
							VALUES ('". $_SESSION["loggedUser"]['userId']."','". $target_file ."','". $_REQUEST['location']."','".$_REQUEST['tag']."')";

					$conn = mysqli_connect("localhost", "root", "", "traveldatabase");
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}
					if (mysqli_query($conn, $sql)) {
						echo "Image Uploaded successfully";
						header('Location: user-home.php');
					} else {
						echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}	
				}else {
					echo "Sorry, there was an error uploading your file<br>";
				}
			}
		}
	}else{
		header("location: index.php");
	}