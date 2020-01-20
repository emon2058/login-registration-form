
<?php require_once('header.php');?>
<?php require_once('navigation.php');?>

     <div id='bgcontent'><br><br><br><br>
	   <div id="content">
      <h1>LOGIN FORM</h1>
	  <div id="form">
	  <form action="login_core.php" method="post">
	  
	    <input type="text" placeholder="user name" name="name"><br><br>
	    <input type="password" placeholder="user password" name="password"><br><br>
	    <input type="submit" value="LogIn"><br><br>
	  
	  </form>
	  <?php
	  if(isset($_REQUEST['wrongPassword'])){
		  echo "<font color='red'>wrong user name or password</font>";
	  }?>

	     </div>
	</div><br><br><br><br><br>
</div>
<?php require_once('footer.php'); ?>

	
	