<?php
	 function getJSONFromDB($sql){
		
		$con=mysqli_connect("localhost","root","","traveldatabase");
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		$result = mysqli_query($con,$sql);
		$arr=array();
		while($row = mysqli_fetch_assoc($result)) {
			$arr[]=$row;
		}
		return json_encode($arr);
	}

	  
	 
	 
	 if(isset($_POST['deletename'])){
			$con=mysqli_connect("localhost","root","","traveldatabase");
		$deletequery="DELETE FROM userinfotable WHERE Username='".$_POST["deletename"]."'";
       	if ($con->query($deletequery) === TRUE) {
			echo '<script language="javascript">';
            echo 'alert("USER successfully DELETED")';
           echo '</script>';
			header('Location: admin.php');
		} else {
			echo "Error: " . $deletequery . "<br>" . $con->error;
		}
	}	
?>