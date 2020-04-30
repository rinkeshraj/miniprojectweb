<?php include('connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="ti.jpg">
	<title>login form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">   
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="form2.css">
</head>
<body class="bg"> 
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
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<form class="form-container" action="form2.php" method="post">
                    <h1 class="h">Login Form</h1>
                    <?php include('errors.php'); ?>
					<div class="form-group">
						<label for="UserName"><i class="fa fa-user" aria-hidden="true"></i>Username</label>
						<input type="text" class="form-control"  placeholder="Username" name="username" id="one">
					</div>
					<div class="form-group">
						<label for="Password"><i class="fa fa-key" aria-hidden="true"></i>Password</label>
						<input type="password" class="form-control"  placeholder="Password" name="password" id="two">
					</div>
					<div >
						<label>
							<a href="#" class="for">Forget Password</a>
						</label>
					</div>
                    <button type="submit" class="btn btn-success btn-block" name="login" >Login</button>
                    <div>
						<h6 class="h6">Not yet a member ? <a href="register.php">Signup by here .</a></h6>
					</div>
				</form>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
		</div>

	</div>
	<footer class="footer bg-primary foo">
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