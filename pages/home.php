<!DOCTYPE html>
<html>
<head>
	<?php session_start(); ?>
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

		<div class="section white">
	    <div class="row container">
	      <h2 class="header">Doppelkopfadler</h2>
	      <p class="grey-text text-darken-3 lighten-3">
	      	Doppelkopfalder is a website developed for educational purposes. 
	      	Still, it provides for all members useful features, fun and entertainment!</p>
	    </div>
	  </div>
		<div class="parallax-container">
	    <div class="parallax"><img src="../img/alb_eagle_wallpaper.png"></div>
	  </div>
	  <div class="section white">
	    <div class="row container">
	      <h2 class="header">Parallax</h2>
	      <p class="grey-text text-darken-3 lighten-3">
	      	One feature will be the development of games especially with Unity 5. 
	      	Unity is a cross-platform game engine developed by Unity Technologies,[5] which is primarily used to develop video games and simulations for computers, consoles and mobile devices.
	      	It is an all purpose game engine that supports 2D and 3D graphics, drag and drop functionality and scripting through C#.
	      </p>
	    </div>
	  </div>
	  <div class="parallax-container">
	    <div class="parallax"><img src="../img/unity5_wallpaper.jpg"></div>
	  </div>

		<div class="section"></div>
		<div class="section"></div>
	</main>

	<!--Footer-->
	<?php include('footer.php') ?>
	<script type="text/javascript" src="../js/home.js"></script>
</body>
</html>