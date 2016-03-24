<?php
$connection = mysql_connect("localhost", "root", "ben"); // Establishing connection with server..
$db = mysql_select_db("VBB_KENYA", $connection); // Selecting Database.
$id=$_POST['id']; // Fetching Values from URL.
$idNumber=$_POST['idNumber'];
$email=$_POST['email'];
$username=$_POST['username'];
$firstName=$_POST['firstName'];
$middleName=$_POST['middleName'];
$lastName=$_POST['lastName'];
$phonenumber=$_POST['phone_number'];
// $privilege=$_POST['privilege'];
$bankcode=$_POST['bank_code'];
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo '<script language="javascript">';
echo 'alert("the email you have entered is invalid")';
echo '</script>';
}else{
$result = mysql_query("SELECT * FROM HIGH_PRIVILAGE_USERS WHERE email='$email'");
$data = mysql_num_rows($result);
if(($data)==0){
$query = mysql_query("insert into HIGH_PRIVILAGE_USERS(USER_IDENTITY_NUMBER, ID_NUMBER, USER_NAME,EMAIL_ADDRESS, FIRST_NAME, MIDDLE_NAME, LAST_NAME, BANK_CODE) values ('$id','$idNumber','$email','$username','$firstName','$middleName','$lastName','$phonenumber','$bankcode')"); // Insert query
if($query){
echo "user successfully Added.....";
header("location:user.php");
}else
{
echo "Error....!!";
header("location:../adduser.php");
}
}else{
echo "This email is already registered, Please try another email...";
}
}
mysql_close ($connection);
?>

