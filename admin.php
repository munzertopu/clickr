 <?php
	function getJSONFromDB($sql){
		$conn = mysqli_connect("localhost", "root", "","traveldatabase");
		$result = mysqli_query($conn, $sql)or die(mysqli_error());
		$arr=array();
		while($row = mysqli_fetch_assoc($result)) {
			$arr[]=$row;
		}
		return json_encode($arr);
	}
?>
<!DOCTYPE html>
<html>
	<head>
	<h1><b>Welcome Admin<b></h1>
	 Your Website user id name are here
	</head>
	<body>
	<div>
		<table >
				<?php
					$sql="select * from userinfotable where Username!='admin'";
					$jsonString= getJSONFromDB($sql);

					$pic=json_decode($jsonString);
					foreach($pic as $kk){ ?>
					<tr>
						<td>
						<?php echo $kk->Username;?>
						</td>
						
					</tr>
				<?php
				}
				?>
			</table>
		</div>
		<hr>
		<form action="delete.php" method="post">
		<font color="red">Type The User Name Which User You Want To Ban:</font>
		<input type="text" name="deletename">
		<input type="submit" name="delete">
		
		</form>
		</form>
		<form action="logout.php">
		<br>
		<hr>
			<input type="submit" value="Logout" />
		</form>
		
	    
		
		
</form>	

