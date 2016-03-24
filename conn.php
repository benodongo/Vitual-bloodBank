<?php
         
      
         
     $mysqli = mysqli_connect("localhost", "root", "", "VBB_KENYA");
     if (mysqli_connect_errno()) 
     {
     printf("Connection failed: %s <br/>", mysqli_connect_error());
     exit();
     } 
     
?>