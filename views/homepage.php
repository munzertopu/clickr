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
				height: 1000px;
    			background: linear-gradient(to bottom, gray, whitesmoke);
			}
			#myCarousel{
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 1), 0 6px 20px 0 rgba(0, 0, 0, 1);
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
					<li><a href="searched.php">BROWSE</a>
					</li>
					
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
					<h1>EXPLORE BANGLADESH IN A NEW WAY</h1>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="col-md-12">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
						<li data-target="#myCarousel" data-slide-to="4"></li>
					</ol>

				<!-- Wrapper for slides -->
					<div class="carousel-inner">

						<div class="item active">
							<img src="images/landway.jpg" alt="Los Angeles" style="width:100%; height: 600px;">
							<div class="carousel-caption">
								<h3>Los Angeles</h3>
								<p>LA is always so much fun!</p>
							</div>
						</div>

						<div class="item">
							<img src="images/latargul.jpg" alt="Chicago" style="width:100%; height: 600px;">
							<div class="carousel-caption">
								<h3>Chicago</h3>
								<p>Thank you, Chicago!</p>
							</div>
						</div>

						<div class="item">
							<img src="images/sajek.jpg" alt="New York" style="width:100%; height: 600px;">
							<div class="carousel-caption">
								<h3>New York</h3>
								<p>We love the Big Apple!</p>
							</div>
						</div>

						<div class="item">
							<img src="images/sunset.jpg" alt="New York" style="width:100%; height: 600px;">
							<div class="carousel-caption">
								<h3>New York</h3>
								<p>We love the Big Apple!</p>
							</div>
						</div>

						<div class="item">
							<img src="images/sylhet.jpg" alt="New York" style="width:100%; height: 600px;">
							<div class="carousel-caption">
								<h3>New York</h3>
								<p>We love the Big Apple!</p>
							</div>
						</div>
					</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
				</a>
			</div>
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
		          				<input type="submit" class="btn btn-success btn-block" name="login" value="Login">
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
		  									<label class="control-label col-sm-3" for="password">Password:</label>
		  									<div class="col-md-9">
		    									<input type="password" class="form-control" placeholder="Password" name="password">
		  									</div>
		  								</div>
		  								<div class="form-group">
		  									<label class="control-label col-sm-3" for="confirmPassword">Confirm password:</label>
		  									<div class="col-md-9">
		    									<input type="password" class="form-control" placeholder="Confirm password" name="confirmPassword">
		  									</div>
		  								</div>
		  								<input type="submit" class="btn btn-success btn-block" name="signup" value="Signup"></span>
									</form>
								</div>
							</div>
						</div>
						<div class="modal-footer">
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