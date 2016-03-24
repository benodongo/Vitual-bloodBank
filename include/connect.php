<?php
$con=mysqli_connect('localhost','root','ben') or die("cannot connect");
mysqli_select_db($con,'VBB_KENYA') or die("cannot select!");

if(mysqli_connect_errno())
{
	echo "Failed to connect to the database".mysqli_connect_errno();
}
else{
	echo "connection successful";
}
?>