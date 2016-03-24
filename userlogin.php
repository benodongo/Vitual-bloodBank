<?php
 session_start();

authenticateuser();
function authenticateuser()
{
// print_r($_POST);
include 'conn.php';      
if(isset($_POST['idnumber']));
  {
      
      $user_id_number=strip_tags($_POST['idnumber']);
      $pass=strip_tags($_POST['password']);
      
      $check="select ID_NUMBER
               from DONOR_REGISTRATION
               where ID_NUMBER='$user_id_number'
               AND PASSWORD='$pass'";
      
      $result=mysqli_query($mysqli,$check);
      
      if($result)
         
        {
        
        $dbarray=mysqli_fetch_array($result);
        if(!empty($dbarray))
          {
             $_SESSION['user_id_number'] = $dbarray['ID_NUMBER'];
             $_SESSION['user_photo']=$dbarray['USER_PHOTO'];
             $_SESSION['user_name']=$dbarray['USER_NAME'];
             $_SESSION['email']=$dbarray['EMAIL_ADDRESS'];
             if (isset($_SESSION['user_id_number'])) 
             {
              
              header('Location:donorsindex.php');
             }
             else
             {
              
      
      $check="select ID_NUMBER
               from HIGH_PRIVILAGE_USERS
               where ID_NUMBER='$user_id_number'
               AND PASSWORD='$pass' AND USER_PRIVILAGE_LEVEL='1'";
      
      $result=mysqli_query($mysqli,$check);
      
      if($result)
        
        {
        
        $dbarray=mysqli_fetch_array($result);
        if(!empty($dbarray))
          {
             $_SESSION['user_id_number'] = $dbarray['ID_NUMBER'];
             $_SESSION['user_photo']=$dbarray['USER_PHOTO'];
             $_SESSION['user_name']=$dbarray['USER_NAME'];
             $_SESSION['email']=$dbarray['EMAIL_ADDRESS'];
             if (isset($_SESSION['user_id_number'])) 
             {
              
              header('Location:adminindex.html');
             }
             }
          
          }
        else
        
        
         {  
            
            $check="select ID_NUMBER
               from HIGH_PRIVILAGE_USERS
               where ID_NUMBER='$user_id_number'
               AND PASSWORD='$pass' AND USER_PRIVILAGE_LEVEL='2'";
      
      $result=mysqli_query($mysqli,$check);
      
      if($result)
         
        {
        
        $dbarray=mysqli_fetch_array($result);
        if(!empty($dbarray))
          {
             $_SESSION['user_id_number'] = $dbarray['ID_NUMBER'];
             $_SESSION['user_photo']=$dbarray['USER_PHOTO'];
             $_SESSION['user_name']=$dbarray['USER_NAME'];
             $_SESSION['email']=$dbarray['EMAIL_ADDRESS'];
             if (isset($_SESSION['user_id_number'])) 
             {
              
              header('Location:clinicianindex.html');
             }
        
             
         }
     
      }
      else{
        $check="select ID_NUMBER
               from BLOOD_DONORS
               where ID_NUMBER='$user_id_number'
               AND PASSWORD='$pass'";
      
      $result=mysqli_query($mysqli,$check);
      
      if($result)
         
        {
        
        $dbarray=mysqli_fetch_array($result);
        if(!empty($dbarray))
          {
             $_SESSION['user_id_number'] = $dbarray['ID_NUMBER'];
             $_SESSION['user_photo']=$dbarray['USER_PHOTO'];
             $_SESSION['user_name']=$dbarray['USER_NAME'];
             $_SESSION['email']=$dbarray['EMAIL_ADDRESS'];
             if (isset($_SESSION['user_id_number'])) 
             {
              
              header('Location:donorsindex.php');
             }
      }
      else 
      {
       echo "<script> alert('the user id or password is incorrect');</script>";
           header('Location:index.html');
      }

    }
      
}
      
?>