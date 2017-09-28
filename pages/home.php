<!DOCTYPE html>
<html>
<head>
	<?php session_start(); ?>
	<!--Imports-->
	<?php include('import.php'); ?>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Title of the website-->
	<title>Doppelkopfadler - Home</title>
</head>

<body>
	<!--Navbar-->
	<?php include('navbar.php'); ?>

	<main>
		<div class="section"></div>
		
		<!--Container-->
		<div class="container">
			<?php if(isset($_SESSION['username'])) : ?>
				<div>You are logged in!</div>
			<?php else : ?>
				<p>You are not logged in!</p>
			<?php endif ; ?>
		</div>

		<div class="section"></div>
		<div class="section"></div>
	</main>

	<!--Footer-->
	<?php include('footer.php') ?>
	<script type="text/javascript" src="../js/home.js"></script>
</body>
</html>