<?php
include 'conn.php';
 $test="SHOW TABLES";
 $selected= mysqli_query($mysqli,$test);
 if($selected)
 {
 	echo $test;
 }
 else{echo"silly";}
?>