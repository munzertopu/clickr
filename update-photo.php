<?php
	require_once 'data-access.php';
	session_start();
	if ($_SESSION['loggedUser']) {
		if (count($_GET)>0) {
			$key = array_keys($_GET)[0];
		}
		$query = "SELECT * FROM imagetable WHERE ID=".$key;
		$result = executeQuery($query);
		while ($row = mysqli_fetch_assoc($result)) {
			$image = $row;
		}
		require_once 'views/update-photo.php';
		if ($_SERVER['REQUEST_METHOD']=="POST") {
			echo $query = "UPDATE imagetable SET imageLocation='".$_POST['location']."', Tag='".$_POST['tag']."' WHERE ID=".$_POST['id'];
			$result = executeNonQuery($query);
			header("location: user-home.php");
		}
	}