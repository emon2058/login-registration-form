<?php
require_once("connectDB.php");

$user_name=$_REQUEST['name'];
$user_pass=$_REQUEST['password'];

$createAuth=md5(sha1($user_name.$user_pass));

$matchQuery="select * from info where auth='$createAuth' ";
$run=mysqli_query($connect,$matchQuery);
$count=mysqli_num_rows($run);
if($count==1){ //more than one registration can't allowed.
if($run==true){
	setcookie("currentUser",$createAuth,time()+(86400*3));/*don't 
	set user information in cookie that's why use $createAuth
	hackers can hack information from COOKIE value*/
//3days the cookie is set,don't need to login again and again 
header("location: loginSuccess.php");}
}
else{
header("location: login.php?wrongPassword");}
?>