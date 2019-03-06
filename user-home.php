<?php
	require_once 'data-access.php';
	session_start();
	if (isset($_SESSION['loggedUser'])) {
		$query = "SELECT * FROM imagetable where UserId=".$_SESSION['loggedUser']['userId'];
		$imageList = executeQuery($query);
		require_once 'views/user-home.php';
		if ($_SERVER['REQUEST_METHOD']=='POST') {
			if (isset($_POST['searchBtn'])) {
				$search = $_POST['search'];
				$query = "SELECT * FROM imagetable";
				if ($_POST['search']!=null) {
					$query = $query. " where ImagePath like '%".$_POST['search']."%' OR ImageLocation like '%".$_POST['search']."%' OR Tag like '%".$_POST['search']."%'";
					$imageList = executeQuery($query);
					header("Location: user-home.php");
					
				}
			}
		}
	}else{
		session_destroy();
		header("location: index.php");
	}