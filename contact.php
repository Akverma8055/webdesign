	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Contact Us</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<header class="header">
		<div class="container text-monospace ">
			<div class="row text-white font-weight-bolder sticky-top ">
				<div class="col-md-3 text-center "> 
					
					<h3 class="text-center  font-italic text-monospace pt-3"><a href="index.php" class="text-white text-decoration-none ">Aman InfoTech</a></h3>
				</div>
					<div class="col-md-9 "> 
					<nav class="nav navbar text-center pt-3"><!-- 
						<button class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
							<span class="navbar-toggle-icon"></span>
						</button> 
						<div class="collapse navbar-collapse" id="mynavbar"> -->
						 	<li class="nav-item"><a href="about.php" class="nav-link ">About Us</a></li>
						 	<li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" 
						 		data-toggle="dropdown">Services</a>
						 			<div class="dropdown-menu header ">
						 				<a href="digimar.php" class="dropdown-item drop-item">Digital Marketing</a>
						 				<a href="webdev.php" class="dropdown-item drop-item">Web Development</a>
						 				<a href="mobiledev.php" class="dropdown-item drop-item">Android Development</a>
						 				<a href="UIUX.php" class="dropdown-item drop-item">UI/UX Development</a>
						 			</div>
						 	</li>

						 	<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
						 	<li class="nav-item"><a href="careerpage.php" class="nav-link ">Career</a></li>
						 	<li class="nav-item"><a href="contact.php" class="nav-link active">Contact Us</a></li>
						 <button class="btn btn-warning "> Request a Quote ></button>
						<!-- </div> -->
					</nav>
				</div>
				</div><hr>
			</div>
		</div>
		</header>
		<form method='POST' action="" class="form">
			<div class="container m-auto">
				<div class="row">
					<div class="offset-lg-3 col-md-6 offset-lg-3">
							<div class="text-center pt-md-5">
						<h3 class="text-light display-4 font-weight-bolder shadow-lg border-bottom border-primary">Contact Us</h3><br>
						</div>
					</div>
					<div class="col-md-6 pb-5">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228625.1192105147!2d80.19829440776184!3d26.447105408697446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c4770b127c46f%3A0x1778302a9fbe7b41!2sKanpur%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1606652291809!5m2!1sen!2sin"
					width="550" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
					<div class="col-md-6 pb-md-5">
						<div class="form-group">
						<label class="lead font-weight-bold text-white">Full Name</label>
						<input type="text" name="fullname" placeholder="Enter Your Name" class="form-control">
						</div>
						
						<div class="form-group">
						<label class="lead font-weight-bold text-white">Mobile</label>
						<input type="text" name="mobile" placeholder="Enter Your Mobile No." class="form-control">
						</div>
						
						<div class="form-group">
						<label class="lead font-weight-bold text-white">E-mail</label>
						<input type="email" name="email" placeholder="Enter Your E-mail" class="form-control">
						</div>
						
	
						
						<div class="form-group">
						<label class="lead font-weight-bold text-white">Message</label>
						<textarea name="msg" placeholder="Enter Your Message" class="form-control"></textarea>
						</div>
						<br>
						<div class="form-group">
						
						<input type="submit" name="submit" value="Send Message" class="btn btn-success ">
						</div>
					</div>
				</div>
			</div>
		</form>
		<?php
			//user send the message or his query to admin  with the help of Insert query
			
			$con=mysqli_connect('localhost','root','','aman_infotech');
			
			if(isset($_POST["submit"]))
			{
				$fullname=$_POST["fullname"];
				$mobile=$_POST["mobile"];
				$email=$_POST["email"];
				$msg=$_POST["msg"];
				
				$insert_query="INSERT INTO contact (`person_id`, `name`, `mobile`, `email`, `msg`, `user_when_send`) 
						VALUES('','$fullname','$mobile','$email','$msg', current_timestamp())";
			}
			
			
		?>
				<!-- <div class="container-fluid w-100"> -->
					<!-- <div class="row"> -->
						<!-- <div class="col"> -->
							<footer class="footer black p-3">
								<div class="container text-light">
									<div class="row">
										<div class="col-lg-4">
											<h3 >Aman InfoTech</h3>
											<address class="address text-muted">23 Kanpur U.P.<br>India
												.<br>
											Tel. +91-1754-412-431<br>
											E-mail :- ait23@mail.com
											</address>
										</div>
										<div class="col-lg-4 border-left">
											<h6 class="text-center lead">News Feed</h6>
											<ul>
												<li class="nav-item"><a href="" class="nav-link">Lorem ipsum dolor sit amet.</a></li>
												<li class="nav-item"><a href="" class="nav-link">Lorem ipsum dolor sit amet.</a></li>
												<li class="nav-item"><a href="" class="nav-link">Lorem ipsum dolor sit amet.</a></li>
												<li class="nav-item"><a href="" class="nav-link">Lorem ipsum dolor sit amet.</a></li>
												<li class="nav-item"><a href="" class="nav-link">Lorem ipsum dolor sit amet.</a></li>
												<li class="nav-item"><a href="" class="nav-link">Lorem ipsum dolor sit amet.</a></li>
											</ul>
										</div>
										<div class="col-lg-4 border-left text-center">
											<p class="lead text-muted text-center"> All Right Reseved| &copy; Copyright2020</p>
											<a href="https://www.facebook.com/profile.php?id=100009267070460" class="nav-link insta"><i class="fa fa-facebook  " aria-hidden="true"></i></a>
											<a href="https://www.instagram.com/invites/contact/?i=mdqket9xap2c&utm_content=344p6gw" class="nav-link insta"><i class="fa fa-instagram  " aria-hidden="true"></i></a>
											<a href="https://twitter.com/AManVeRma_8055?s=09" class="nav-link insta"><i class="fa fa-twitter  " aria-hidden="true"></i></a>
											<!-- <a href="" class="nav-link insta"><i class="fa fa-linkedin  " aria-hidden="true"></i></a> -->
										</div>
									</div>
								</div>
								<p class="text-center text-muted">This is Offical Website Created By Aman Kumar Verma</p>
					</footer>
						<!-- </div>
					</div>
				</div> -->
	</body>
	</html>