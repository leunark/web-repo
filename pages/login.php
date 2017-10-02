<?php 
	session_start();
	if(isset($_SESSION['username'])) {
		header("Location: home.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<!--Imports-->
	<?php include('import.php'); ?>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Title of the website-->
	<title>Doppelkopfadler</title>
</head>

<body>
	<!--Navbar-->
	<?php include('navbar.php'); ?>

	<main>
		<div class="section"></div>
		
		<!--Login-->
		<div class="container center">
			<img class="responsive-img" style="width: 250px;" src="https://i.imgur.com/ax0NCsK.gif" />
			<div class="section"></div>

			<h5 class="indigo-text">Please, login into your account</h5>
			<div class="section"></div>

			<div class="container">
				<div class="row custom-box">

					<form class="col s12" method="post" action="../php/login.php">

						<div class='row'>
							<div class='input-field col s12'>
								<input class='validate' type='text' name='username' id='username' tabindex='1'/>
								<label for='username'>Enter your username</label>
							</div>
						</div>

						<div class='row'>
							<div class='input-field col s12'>
								<input class='validate' type='password' name='password' id='password' tabindex='2'/>
								<label for='password'>Enter your password</label>
							</div>
							<label style='float: right;'>
								<a class='pink-text' href='#!'><b>Forgot Password?</b></a>
							</label>
						</div>

						<br />
						<center>
							<div class='row'>
								<button type='submit' name='login' class='col s12 btn btn-large waves-effect indigo darken-1'>Login</button>
							</div>
						</center>
					</form>
				</div>
			</div>
			<a href="register.php">Create account</a>
		</div>

		<div class="section"></div>
		<div class="section"></div>
	</main>

	<!--Footer-->
	<?php include('footer.php'); ?>
	<script type="text/javascript" src="../js/login.js"></script>
</body>
</html>