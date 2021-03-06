<?php
	session_start();
	if(isset($_SESSION['type']))
		header('Location: index.php')
?>
<!doctype html>
<html>
<head>
	<title>IIITA-Cart</title>
	<link rel="stylesheet" href="css/materialize.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/loginregistrationstyles.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class=""> 

	<div class="overlay overlay-contentpush">
		<span type="button" class="overlay-close"></span>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="books.php">Books</a></li>
			<li><a href="electronics.php">Electronics</a></li>
			<li><a href="other.php">Other</a></li>
		</ul>
	</div>
	
	<div class="row" id="page">
		
		<div class="row" id="top-bar">
			<div class="col s3 left">
				<p class="brand-logo"><a href="index.php" class="white-text">IIITA-Cart</a></p>
			</div>
			<div class="col s9 full-height">
				<div class="col s1 offset-s11 center-align icons" id="menu">
					<i class="material-icons waves-effect">menu</i>
				</div> 
			</div>
		</div>

		<div class="row valign-wrapper" id="form-container">
			<div id="login" class="col s12 m6 offset-m3 l4 offset-l4 center">
				<p class="center-align">Login</p>
				<form class="" action="php/login.php" method="post">
					<div class="input-field col s12">
						<i class="material-icons prefix">account_circle</i>
						<input id="username" type="text" class="validate" name="username" required>
						<label for="username">Username</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">vpn_key</i>
						<input id="password" type="password" class="validate" name="password" required>
						<label for="password">Password</label>
					</div>
					<p class="center-align">
					    <input type="checkbox" class="filled-in" id="staff" name="isstaff"/>
					    <label for="staff">I'm a staff member</label>
					</p>
					<button class="btn green waves-effect waves-light" type="submit" name="action">
						Login<i class="material-icons right">send</i>
					</button>
				</form>
				<a href="#" class="" id="registerHere">Register here</a>
			</div>

			<div class="col s12 m6 offset-m3 l4 offset-l4 valign" id="chooseForRegistration">
				<div class="col s6 center waves-effect" id="customer">
					<i class="material-icons large">person</i>
					<p class="center-align">Here to buy</p>
				</div>
				<div class="col s6 center waves-effect" id="staff">
					<i class="material-icons large">person</i>
					<p class="center-align">Here to sell</p>					
				</div>
			</div>
		</div>

	</div>

	<footer class="row">
		<div class="col s8 offset-s2">
			<div class="col m4 section">
				<p class="white-text">Overview</p>
				<ul>
					<li><a href="#">About Us</a></li>
					<!-- <li><a href="#">FAQs</a></li> -->
					<li><a href="#">Terms</a></li>
					<!-- <li><a href="#">Privacy</a></li> -->
				</ul>
			</div>
			<div class="col m4 section">
				<p class="white-text">Account</p>
				<ul>
					<li><a href="login.php">Create Account</a></li>
					<li><a href="login.php">Login</a></li>
					<li><a href="login.php">Edit </a></li>
				</ul>
			</div>
			<div class="col m4 section">
				<p class="white-text">Address</p>
				<ul>
					<li>IIIT Allahabad,</li>
					<li>Jhalwa,</li>
					<li>Allahabad - 211012</li>
				</ul>
			</div>
		</div>
		<p class="col s8 offset-s2">Copyright to us developers</p>
	</footer>


<!-- scripts go here -->
<script src="js/jquery-1.12.2.js"></script>
<script src="js/materialize.js"></script> 
<script src="js/scripts.js"></script>
</body>
</html>