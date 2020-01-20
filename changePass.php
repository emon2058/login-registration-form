<?php
     require_once('header.php');
	 require_once('navigation.php');
?>
      <div id='bgcontent'><br><br><br>
	  <div id="content">
      <h1>CHANGE PASSWORD</h1>
	  
<form action='changePass_core.php' method="post">

   <input type="password" name='oldPass' placeholder="old password"><br>
   <input type="password" name='newPass' placeholder="new password"><br>
   <input type="password" name='confirmPass' placeholder="confirm password">
   <br><input type="submit" value="change password"><br><br><br><br>
   
</form>
</div><br><br><br><br><br>
</div>