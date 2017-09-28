<li class="collection-item avatar">
  <img src="../img/avatar.png" alt="" class="circle profile-avatar">
  <?php if(isset($_SESSION['username'])) : ?>
	  <a class="profile-title">Username</a> <p></p>
	  <a class="profile-status">Status</a> <p></p>
	  <a class="profile-subtitle">Profile</a> <p></p>
	  <a class="profile-subtitle">Friends</a> <p></p>
 		<a href="../php/logout.php" class="secondary-content"><i class="material-icons logout-icon">exit_to_app</i></a>
  <?php else : ?>
  	<a class="profile-title">Not logged in!</a> <p></p>
  	<a class="profile-subtitle">Create account</a> <p></p>
  	<a class="profile-subtitle">Login</a> <p></p>
  	<br>
  <?php endif ; ?>
</li>