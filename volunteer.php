<?php
//$currentdate= new Date(); 
include 'conn.php';
if (isset($_POST['nationalId']))
 {
	$id_number= strip_tags($_POST['nationalId']);
	$username=strip_tags($_POST['username']);
	$email=$_POST['email'];
	$firstname=strip_tags($_POST['firstName']);
	$middlename=strip_tags($_POST['middleName']);
	$lastname=strip_tags($_POST['lastName']);
	$blood_group=strip_tags($_POST['blood_group']);
	$phone_number=strip_tags($_POST['phone_number']);
	$dob=strip_tags($_POST['dob']);
	$county=strip_tags($_POST['county']);
	$lastname=strip_tags($_POST['sub_county']);
	$sub_county=strip_tags($_POST['sub_county']);
	$dod=strip_tags($_POST['dod']);
	$bank_name=strip_tags($_POST['bank_name']);
	// $age= ($currentdate-$dob);

	// $select= "select ID_NUMBER from DONOR_REGISTRATION 
	//           where (ID_NUMBER='$id_number')";
	// $true= mysqli_query($mysqli,$select);
	// if($true=true)
	// {
	// 	echo "IDENTITY NUMBER ALREADY EXISTS";
	// }
	// else
	// {
	// 	$select1="select ID_NUMBER from BLOOD_DONORS where
	// 	           (ID_NUMBER='$id_number')";
	// 	$execute=mysqli_query($mysqli,$select1);
	// 	if($execute=true)
	// 	{
	// 		echo "IDENTITY NUMBER ALREADY EXISTS";
	// 	}
	// 	else
	// 	{
         $insert="INSERT INTO donor_registration(ID_NUMBER,USER_NAME,EMAIL_ADDRESS,
				         	FIRST_NAME,MIDDLE_NAME,LAST_NAME,BLOOD_GROUP,
				         	PHONE_NUMBER,DATE_OF_BIRTH,AGE,COUNTY,SUB_COUNTY,
				         	USER_PHOTO,DONATION_DATE,BANK_NAME,BANK_CODE) 
                            VALUES('$id_number','$username','$email','$firstname',
                            	'$middlename','$lastname','$blood_group','$phone_number',
                            	now(),'60','$county','$sub_county','',now(),'$bank_name',
                            	'1234')";
        $true=mysqli_query($mysqli,$insert);
        if($true)
        {
        	echo "registration successful, visit the donation center";
        }
        else{
        	echo "registration failed";
        }
		}
		else{echo "no data received";}
	// }
 // }
?>
