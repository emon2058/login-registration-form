  <?php  require_once("header.php");?>
  
  <?php	require_once("navigation.php");?>
	
     <div id='bgcontent'><br><br><br>
	   <div id="content">
      <h1>REGISTRATION FORM</h1>
	  <div id="form">
	  <form action="security.php" method="post">
	  <input type="text" name="name" placeholder="name">
	  <input type="text" name="email" placeholder="email">
	  <input type="password" name="password" placeholder="password">
	  <input type="submit" value="Sign Up"><br><br>
	  </form>
	    </div>
		
	  <?php
	  if(isset($_REQUEST['wrong'])){
		  echo "<font color='red'>This name is already used</font>";
	  }?>
	  
	  </div><br><br><br><br><br>
       
  <?php require_once("footer.php");?>
