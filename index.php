<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Workshop SMK ADI SANGGORO</title>
	<script src="https://kit.fontawesome.com/49d988846c.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>

<body>
	<section>
		<div class="circle1"></div>
		<header>
			<a href="#"><img src="img/logo-as.svg" class="logo" width="120px"></a>
			<div class="toggle" onclick="toggleMenu();"></div>
			<ul class="navigation">
				<li><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</header>
		<div class="content">
			<div class="textBox">
				<h2>
					Adi Sanggoro<br>Keren <span>Banget</span></h2>
				</h2>
				<?php
				$x = 1;
				while ($x <= 1) {
					echo "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum deleniti temporibus sed quis in id odio provident laudantium nulla odit inventore, nobis aliquid vitae adipisci eaque fugiat praesentium rerum porro.</p>";
					$x++;
				}
				?>
				<a href="#">Learn More</a>
			</div>
			<div class="imgBox">
				<img src="img/as-transparan.png" alt="">
			</div>
		</div>
	</section>

	<div class="section">
		<div class="container">
			<div class="abtus">
				<a href=""> <img src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/64/000000/external-group-cyber-security-kiranshastry-lineal-kiranshastry-2.png" /></a>
			</div>
			<div class="title">
				<h1>About Us</h1>
			</div>
			<div class="about">
				<div class="article">
					<h3>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo velit, faucibus quis ultricies ut, condimentum sed eros. Phasellus bibendum commodo felis, ac molestie metus rutrum quis. Praesent nec lacinia arcu. Fusce scelerisque bibendum maximus. Phasellus pharetra nulla eu tortor posuere, vitae tempor mauris pellentesque. Pellentesque non vulputate felis. Mauris turpis elit, congue nec aliquet eget, gravida vel sem.
					</h3>
					<p>
						Pellentesque in urna in odio pretium convallis. Nullam placerat, metus vitae ornare imperdiet, quam massa consequat ex, nec tempus urna risus quis risus. Donec arcu leo, aliquet quis mollis eu, sodales sed massa. Nullam ac massa lorem. Praesent ut massa nec ex ultrices faucibus. Mauris eleifend dolor aliquet consequat interdum. Vestibulum a fringilla dui. Pellentesque egestas mattis tellus, a sagittis leo eleifend vitae.
					</p>
					<div class="button">
						<a href="">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-contactus">
		<span class="big-circle"></span>
		<img src="img/shape.png" class="square" alt="" />
		<div class="form">
			<div class="contact-info">
				<h3 class="title">Let's get in touch</h3>
				<p class="text">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
					dolorum adipisci recusandae praesentium dicta!
				</p>

				<div class="info">
					<div class="information">
						<img src="img/location.png" class="icon" alt="" />
						<p>Jl. Sengked No.1, Kampus IPB</p>
					</div>
					<div class="information">
						<img src="img/email.png" class="icon" alt="" />
						<p>lorem@ipsum.com</p>
					</div>
					<div class="information">
						<img src="img/phone.png" class="icon" alt="" />
						<p>123-456-789</p>
					</div>
				</div>

				<div class="social-media">
					<p>Connect with us :</p>
					<div class="social-icons">
						<a href="#">
							<i class="fab fa-facebook-f"></i>
						</a>
						<a href="#">
							<i class="fab fa-twitter"></i>
						</a>
						<a href="#">
							<i class="fab fa-instagram"></i>
						</a>
					</div>
				</div>
			</div>

			<div class="contact-form">
				<span class="circle one"></span>
				<span class="circle two"></span>

				<form action="index.html" autocomplete="off">
					<h3 class="title">Contact us</h3>
					<div class="input-container">
						<input type="text" name="name" class="input" />
						<label for="">Username</label>
						<span>Username</span>
					</div>
					<div class="input-container">
						<input type="email" name="email" class="input" />
						<label for="">Email</label>
						<span>Email</span>
					</div>
					<div class="input-container">
						<input type="tel" name="phone" class="input" />
						<label for="">Phone</label>
						<span>Phone</span>
					</div>
					<div class="input-container textarea">
						<textarea name="message" class="input"></textarea>
						<label for="">Message</label>
						<span>Message</span>
					</div>
					<input type="submit" value="Send" class="btn" />
				</form>
			</div>
		</div>
	</div>
	</div>
	</div>
	</div>
	<footer class="footer">
		Copyright 2022 Girvan Azhar
	</footer>
	<script type="text/javascript">
		function toggleMenu() {
			var menuToggle = document.querySelector('.toggle');
			var navigation = document.querySelector('.navigation');
			menuToggle.classList.toggle('active');
			navigation.classList.toggle('active');
		}
	</script>
	<script src="js/app.js"></script>
</body>

</html>