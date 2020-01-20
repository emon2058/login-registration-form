<?php

require_once('connectDB.php');

$oldPassword=$_REQUEST['oldPass'];
$newPassword=$_REQUEST['newPass'];
$confirmPassword=$_REQUEST['confirmPass'];

$getCurrentUser=$_COOKIE['currentUser'];#stores auth that is encrypted.

$checkOldPassword="select * from info where auth='$getCurrentUser'";
$runQuery=mysqli_query($connect,$checkOldPassword);
if($runQuery==true){
	if(mysqli_num_rows($runQuery)==1){
		while($getData = mysqli_fetch_array($runQuery)){
			$userName=$getData['username'];
		}
	}
}

$newAuth=md5(sha1($userName.$oldPassword));
/*  echo"<br>";
echo $getCurrentUser;*/ 
if($newAuth==$getCurrentUser && $newPassword==$confirmPassword){
	$updateAuth=md5(sha1($userName.$newPassword));
	$encryptPassword=md5(sha1($confirmPassword));
	$updatePassword="update info set password='$encryptPassword',
	auth='$updateAuth' where username='$userName'";
	$newPasswordQuery=mysqli_query($connect,$updatePassword);
	if($newPasswordQuery==true){
	header("location: logout_core.php?changed password"); 
	}
}
 else{
	header("location: changePass.php");
}
?>