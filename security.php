<?php
require_once('connectDB.php');

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$auth=md5(sha1($name.$password));
$encryptPass=md5(sha1($password));

$checkName="select * from info where username='$name'";
$checkQuery=mysqli_query($connect,$checkName);

if($checkQuery==true){
    if(mysqli_num_rows($checkQuery)==1){
		#check if username exists then didn't signup.
	 header('location: signup.php?wrong');
    }

    else{
$insertSignupData="insert into info (username,email,auth,password)
values ('$name','$email','$auth','$encryptPass')";
$runquery=mysqli_query($connect,$insertSignupData);

if($runquery==true){
	
	header('location: home.php');
       }
    }
}
?>