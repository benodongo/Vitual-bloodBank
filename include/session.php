<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "ben");
// Selecting Database
$db = mysql_select_db("VBB_KENYA", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['username'];

// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("SELECT name FROM registration where email='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['name'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location:../signup.php'); // Redirecting To signup page
}
?>