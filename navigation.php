<div id="navigation">
	     <a href="home.php">Home</a>
		 <?php if(isset($_COOKIE['currentUser'])){
		 echo'<a href="loginSuccess.php">Profile</a>';}
		 else {echo'<a href="signup.php">Sign Up</a>';}?>
		<?php if(!isset($_COOKIE['currentUser']))
		{ echo '<a href="login.php">Login</a>';}
	else { echo '<a href="logout_core.php">Logout</a>';}?>

	<?php if(isset($_COOKIE['currentUser'])){
	echo"<a href='changePass.php'>Change Password</a>";}?>
</div>