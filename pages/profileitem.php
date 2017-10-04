<li class="collection-item avatar">
  <img src="../img/avatar.png" alt="" class="circle profile-avatar">
  <?php if(isset($_SESSION['username'])) : ?>
	  <a href="profile.php" class="profile-username">Username</a> <p></p>
	  <a href="profile.php" class="profile-status">Status</a> <p></p>
	  <a href="profile.php" class="profile-subtitle">Profile</a> <p></p>
	  <a href="friends.php" class="profile-subtitle">Friends</a> <p></p>
 		<a href="#!" class="secondary-content"><i class="material-icons logout-icon">exit_to_app</i></a>
  <?php else : ?>
  	<a href="login.php" class="profile-title">Not logged in!</a> <p></p>
  	<a href="register.php" class="profile-subtitle">Create account</a> <p></p>
  	<a href="login.php" class="profile-subtitle">Login</a> <p></p>
  	<br>
  <?php endif ; ?>
</li>