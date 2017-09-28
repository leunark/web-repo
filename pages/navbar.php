<nav class="indigo darken-1">
	<div class="container">
		<div class="nav-wrapper">
			<!--Logo-->
			<a href="#!" class="brand-logo">Doppelkopfadler</a>			
			<!--Collapsable Menu Button-->
			<a href="#" class="button-collapse" id="buttonDropdownMenu"><i class="material-icons">menu</i></a>
			<!--Navbar Links-->
			<ul class="right hide-on-med-and-down">
				<li><a href="home.html">Home</a></li>
				<?php if(isset($_SESSION['username'])) : ?>
					<li><a href="projects.html">Projects</a></li>
					<li><a href="knowledge.html">Knowledge</a></li>
				<?php endif ; ?>
				<li><a href="contact.html">Contact</a></li>
				<li><a href="#" class="dropdown-button" data-activates="dropdownProfile"><i class="material-icons">account_circle</i></a></li>
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
      <a href="#!" class="collection-item">Home</a>
      <?php if(isset($_SESSION['username'])) : ?>
	      <a href="#!" class="collection-item">Projects</a>
	      <a href="#!" class="collection-item">Knowledge</a>
      <?php endif ; ?>
      <a href="#!" class="collection-item">Contact</a>
      <?php include('profileitem.php'); ?>
    </div>
	</div>
</div>

