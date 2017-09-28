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
		<div class="container" style="text-align: center;">
			<img class="responsive-img" style="width: 250px;" src="https://i.imgur.com/ax0NCsK.gif" />
			<div class="section"></div>

			<h5 class="indigo-text">Register your account</h5>
			<div class="section"></div>

			<div class="container">
				<div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

					<form class="col s12" method="post" action="../php/register.php">

						<div class='row'>
							<div class='input-field col s12'>
								<input class='validate' type='text' name='username' id='username' />
								<label for='username'>Choose your username</label>
							</div>
						</div>

						<div class='row'>
							<div class='input-field col s12'>
								<input class='validate' type='password' name='password' id='password' />
								<label for='password'>Choose your password</label>
							</div>
						</div>

						<div class='row'>
							<div class='input-field col s12'>
								<input class='validate' type='password' name='passwordConfirmation' id='password' />
								<label for='password'>Confirm your password</label>
							</div>
							<label style='float: right;'>
								<a class='pink-text' href='#!'><b>Password rules?</b></a>
							</label>
						</div>

						<br />
						<center>
							<div class='row'>
							<button type='submit' name='register' class='col s12 btn btn-large waves-effect indigo'>Register</button>
							</div>
						</center>
					</form>
				</div>
			</div>
			<a href="login.php">Already have an account? Login!</a>
		</div>

		<div class="section"></div>
		<div class="section"></div>
	</main>

	<!--Footer-->
	<?php include('footer.php') ?>
</body>
</html>