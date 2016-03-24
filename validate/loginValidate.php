<?php
session_start();//starting session
if (isset($_POST['username']) && !empty($_POST['username'])&& isset($_POST['password'])&& !empty($_POST['password'])) {
	$username=$_POST['username'];
	//$old_password=$_Post['password'];
	$password=$_POST['password'];
	 include ('include/connect.php'); 

	//to protect from mysql injection and for security
	$username=stripslashes($username);
	$password=stripslashes($password);
	$username=mysql_real_escape_string($username);
	$password=mysql_real_escape_string($password);


	$querry=mysqli_query($con,"SELECT * FROM Admin WHERE username='$username' AND password='$password'");
	$rows=mysqli_num_rows($querry);
	if ($rows==1) {
		//initializing sesssion
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		//redirecting to adminindex page
		header("location:../adminindex.html");
        }else{
        	$error="Invalid Username or password";
        	echo "$error";
        }

}else{
	echo "Enter the right username or password";
}


?>