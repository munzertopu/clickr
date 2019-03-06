<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<style>
			body{
    			background: linear-gradient(to bottom, gray, whitesmoke);
			}
			.uploaded-image{
				border-style: solid;
				margin: 20px 10px;
				border-radius: 5px;
				text-align: center;
			}
			.uploaded-image h4{
				text-decoration: none;
			}
			.uploaded-image img{
				width: 100%;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="/clickr/user-home.php">CLICKR<span class="glyphicon glyphicon-camera"></span></span></a>
				</div>
				<ul class="nav navbar-nav">
					
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="upload-photo.php"><span class="glyphicon glyphicon-cloud-upload"></span> Upload</a></li>
					<li><a href="user-profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
      				<li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
			</div>
		</nav>
		<div class="container-fluid">
			<?php
				$counter = 1;
				foreach ($imageList as $image) {
					if ($counter%3==0) { ?>
						<div class='row'>
					<?php } ?>
				<div class='col-md-4'>
					<a href= <?php echo "photo-action.php?".$image['ID']; ?> >
						<div class='uploaded-image'>
							<img src= <?php echo $image['ImagePath']; ?> >
							<?php echo "<h4>". $image['Tag']." | ".$image['ImageLocation'] ."</h4>
						</div>
					</a>
				</div>";
				if ($counter%3==0) {
						echo "</div>";
					}
					$counter++; }?>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>