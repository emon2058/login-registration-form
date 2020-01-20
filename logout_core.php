<?php
   //remove cookie sothat browser can't have user info.
   setcookie('currentUser','',time()-(86400*7));

  if(isset($_REQUEST['changed password'])){
	  echo "<font color='red'>Password changed</font>";
}
   header('location: login.php');

?>
