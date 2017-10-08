<nav class="color-main-bg">
	<div class="container">
		<div class="nav-wrapper">
			<!--Logo-->
			<a href="#!" class="brand-logo">Doppelkopfadler</a>			
			<!--Collapsable Menu Button-->
			<a href="#" class="button-collapse" id="buttonDropdownMenu"><i class="material-icons">menu</i></a>
			<!--Navbar Links-->
			<ul class="right hide-on-med-and-down">
				<li><a href="home.php">Home</a></li>
				<?php if(isset($_SESSION['username'])) : ?>
					<li><a href="projects.php">Projects</a></li>
				<?php endif ; ?>
				<li><a href="contact.php">Contact</a></li>
				<li><a class="dropdown-button" data-activates="dropdownProfile"><i class="material-icons">account_circle</i></a></li>
			</ul>
		</div>
	</div>
</nav>

<!--Profile Dropdown on medium or bigger devices-->
<div class="collection" id="dropdownProfile">
	<?php include('profileitem.php'); ?>
</div>

<!--Menu List on small devices-->
<div class="dropdown-suckerfish">
	<div class="grey lighten-4 z-depth-1" id="dropdownMenu">
		<div class="collection">
      <a href="home.php" class="collection-item">Home</a>
      <?php if(isset($_SESSION['username'])) : ?>
	      <a href="projects.php" class="collection-item">Projects</a>
	      <a href="knowledge.php" class="collection-item">Knowledge</a>
      <?php endif ; ?>
      <a href="contact.php" class="collection-item">Contact</a>
      <?php include('profileitem.php'); ?>
    </div>
	</div>
</div>

