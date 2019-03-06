<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<style>
			body{
    			background: linear-gradient(to bottom, gray, whitesmoke);
    			height: 800px;
			}
			#propic{
				float: right;
			}
			#propic img{
				height: 150px;
				width: 150px;
				border-radius: 80px;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
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
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<form class="form-horizontal" method="POST">
						<div class="form-group">
							<label class="control-label col-sm-2" for="oldPassword">Old password:</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" name="oldPassword">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="newPassword">New password:</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" name="newPassword">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="newPassword2">Retype password:</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" name="newPassword2">
							</div>
						</div>
						<div class="form-group">        
							<div class="col-sm-offset-2 col-sm-10">
								<input type="submit" class="btn btn-success" name="passChange" value="Submit"></button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-3" id="propic">
					<img src= <?php echo $_SESSION['loggedUser']['propic']; ?> >
					<div>
						<form method="POST" enctype="multipart/form-data">
							<input type="file" name="propic">
							<input type="submit" name="change" value="change picture" name="propic">
						</form>
					</div>
				</div>
			</div>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>