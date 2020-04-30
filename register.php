<?php
 include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="ti.jpg">  
	<title>SignUp form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">   
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="register.css">
	
</head>
<body> 
	<nav class="navbar navbar-dark navbar-expand-sm sticky-top bg-primary">
		<div class="container-fluid">
		  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#Navbar">
			<span class="navbar-toggler-icon "></span>
		  </button>
		  <a class="navbar-brand ml-auto" href="index.php"><img src="logo.jfif">Match Prediction</a>
		  <div class="collapse navbar-collapse mr-5" id="Navbar">
			<ul class="navbar-nav ml-auto ">
			  <li class="nav-item"><a href="index.php">Home</a></li>
			  <!-- <li class="nav-item"><a href="pre.html">Prediction</a></li> -->
			  <li class="nav-item"><a href="contact.php">Contacts</a></li> 
			  <li class="nav-item"><a href="ABOUT.php">About Us</a></li>
			  <li class="nav-item"><a href="form2.php">Login</a></li> 
			  <li class="nav-item"><a href="register.php">SignUp</a></li> 
			</ul>
		  </div> 
		</div>
	</nav>
	<div class="container-fluid bg">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<form class="form-container" action="register.php" method="post">
					<h1 class="h">SignUp Form</h1>
					<div>
						<h6 class="h6">Already a member ? <a href="form2.html">Signin by here .</a></h6>
					</div>
					<?php include('errors.php'); ?>
					<div class="row">
						<div class="col-md-6 col-sm-2 col-xs-6">
							<div class="form-group">
								<label for="firstName"><i class="fa fa-user" aria-hidden="true"></i>FirstName</label>
								<input type="text" class="form-control"  placeholder="FirstName" name="firstname" id="one">
							</div>
						</div>
						<div class="col-md-6 col-sm-2 col-xs-6">
							<div class="form-group">
								<label for="lastName"><i class="fa fa-user" aria-hidden="true"></i>LastName</label>
								<input type="text" class="form-control"  placeholder="LastName" name="lastname" id="two">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="username"><i class="fa fa-user" aria-hidden="true"></i>Username</label>
						<input type="text" class="form-control"  placeholder="Username" name="username" id="three">
					</div>
					<div class="form-group">
						<label for="Email"><i class="fa fa-envelope" aria-hidden="true"></i>Email</label>
						<input type="email" class="form-control"  placeholder="Email" name="email" id="four">
					</div>
					<div class="form-group">
						<label for="password"><i class="fa fa-key" aria-hidden="true"></i>Password</label>
						<input type="password" class="form-control"  placeholder="Password" name="password" id="five">
					</div>
					<div class="form-group">
						<label for="password"><i class="fa fa-key" aria-hidden="true"></i>Confirm Password</label>
						<input type="password" class="form-control"  placeholder="Password" name="cpassword" id="six">
					</div>
					<button type="submit" class="btn btn-success btn-block" name="register">Register</button>
				</form>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
		</div>
	</div>
	<footer class="footer bg-primary">
		<div class="container-fluid">
			<div class="row justify-content-center">             
				<div class="col-auto">
					<p>© Copyright 2020 Match Predictor</p>
				</div>
			 </div>
		</div>
	</footer>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>

