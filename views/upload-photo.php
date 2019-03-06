<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<style>
		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="/clickr/user-home.php">CLICKR<span class="glyphicon glyphicon-camera"></span></span></a>
				</div>
				<ul class="nav navbar-nav">
					<form class="navbar-form navbar-left" method="POST">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search" name="search">
					        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
						</div>
				    </form>
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
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<form class="form-horizontal" method="POST"  enctype="multipart/form-data" >
						<div class="form-group">
							<label class="control-label col-sm-2" for="location">Location:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" placeholder="Location" name="location">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="tag">Tag :</label>
							<div class="col-sm-10">          
								<input type="text" class="form-control" placeholder="Tag" name="tag">
							</div>
						</div>
						<div class="form-group">        
							<div class="col-sm-offset-2 col-sm-10">
								<input type="file" class="btn btn-default" name="image"><br>
							</div>
						</div>
						<div class="form-group">        
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-success">Submit</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>