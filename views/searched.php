<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">
			<style>
			h1{
				color: white;
				text-align: center;
				font-size: 55px;
				font-family: cursive;
			}
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
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="/clickr">CLICKR<span class="glyphicon glyphicon-camera"></span></span></a>
				</div>
				<ul class="nav navbar-nav">
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="searched.php">BROWSE</a>
					
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" data-toggle="modal" data-target="#signup-modal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      				<li><a href="#" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!--span style="margin-left: -15%;"><img src="images/ban-logo.png"></span-->
					<h1>EXPLORE BANGLADESH IN A NEW WAY</h1>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<?php
				$counter = 1;
				foreach ($imageList as $image) {
					if ($counter%3==0) { ?>
						<div class='row'>
					<?php } ?>
				<div class='col-md-4'>
					<a href= <?php echo "view-photo.php?".$image['ID']; ?> >
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
		<div class="container">
			<!--Login modal-->
			<div class="modal fade" id="login-modal" role="dialog">
				<div class="modal-dialog">
					<!--Modal content-->
					<div class="modal-content">
						<div class="modal-header modal-icon">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4>
							<span><img src="images/login.png" class="img-circle" alt="Login" width="60" height="60">
							</span> Login</h4>
						</div>
						<div class="modal-body">
							<form method="POST">
								<div class="form-group">
									<label for="username"> Username</label>
		                            <div class="input-group">
		                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		                                <input type="text" name="username" id="username" class="form-control" placeholder="Enter username">
		                            </div>
								</div>
								<div class="form-group">
									<label for="password"> Password</label>
		                            <div class="input-group">
		                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		                                <input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
		                            </div>
								</div>
								<div class="checkbox">
		          				<label><input type="checkbox" value="">Remember me</label>
		          				</div>
		          				<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
							</form>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
							<p>Not a member? <a href="#" class="sign-up">Signup</a></p>
		      				<p><a href="#">Forgot Password?</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<!-- Signup modal  -->
			<div class="modal fade" id="signup-modal" role="dialog">
				<div class="modal-dialog">
					<!--Modal content-->
					<div class="modal-content">
						<div class="modal-header modal-icon">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
		        			<h4><span><img src="images/signup.png" class="img-circle" alt="Signup" width="60" height="60"></span> Signup</h4>
						</div>
						<div class="modal-body">
							<div class="tab-content">
								<div id="traveler" class="tab-pane fade in active">
									<form class="form-horizontal" method="POST">
										<div class="form-group">
		  									<label class="control-label col-sm-3" for="fullName">Full name:</label>
		  									<div class="col-md-9">
		    									<input type="text" class="form-control" name="fullName" placeholder="Full name">
		  									</div>
		  								</div>
		  								<div class="form-group">
		  									<label class="control-label col-sm-3" for="email">Email:</label>
		  									<div class="col-md-9">
		    									<input type="email" class="form-control" placeholder="Email" name="email">
		  									</div>
		  								</div>
		  								<div class="form-group">
		  									<label class="control-label col-sm-3" for="uname">Username:</label>
		  									<div class="col-md-9">
		    									<input type="text" class="form-control" placeholder="Username" name="username">
		  									</div>
		  								</div>
		  								<div class="form-group">
		  									<label class="control-label col-sm-3" for="pass">Password:</label>
		  									<div class="col-md-9">
		    									<input type="password" class="form-control" placeholder="Password" name="traveler-pass">
		  									</div>
		  								</div>
		  								<div class="form-group">
		  									<label class="control-label col-sm-3" for="con-pass">Confirm password:</label>
		  									<div class="col-md-9">
		    									<input type="password" class="form-control" placeholder="Confirm password" name="traveler-con-pass">
		  									</div>
		  								</div>
		  								<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Signup</button>
									</form>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
							<p>Member already? <a class="login" href="#">Login</a></p>
		      				<p><a href="#">Forgot Password?</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>