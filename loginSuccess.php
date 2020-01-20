<?php require_once('header.php');?>

<?php require_once('navigation.php');?>

<?php
//if(isset($_REQUEST['success'])){
//echo"login successfully<br>";}
if(isset($_COOKIE["currentUser"])){
	$usercookie=$_COOKIE['currentUser'];
	$query="select * from info where auth='$usercookie'";
	$run_query=mysqli_query($connect,$query);
	if($run_query==true){
		while($row=mysqli_fetch_array($run_query)){
		 echo $row['username'].'<br>'.$row['email'];
		 $userpic=$row['picture'];
		 echo "<img src='../mysqli/image/$userpic'/>";
        }
		echo '<h1 style="text-align:center; color:#dfcf29d9;
background-color: rebeccapurple; margin-top:0px;
font-size:67px; padding:16px;">'.$row['username'].'</h1>';
	}
	}
else{
	header('location: home.php');

}
?>
</body>
</html>