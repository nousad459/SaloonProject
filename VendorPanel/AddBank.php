<?php
include 'connection.php';

if(!empty($_POST['accNo']))
{
	$sql = "SELECT * FROM `bank_details` WHERE `Accou_no` = '".$_POST['accNo']."'";
	$result = mysqli_query($conn, $sql);
    $num_row = mysqli_num_rows($result);
    if($num_row > 0)
    {
       
       echo "This Account Number already saved..";


    }
	else
	{
		$query = "INSERT INTO `bank_details`(email , `name`, `Accou_no`, `bank_name`, `ifsc_code`) VALUES ('".$_POST['hidden']."','".$_POST['name']."','".$_POST['accNo']."','".$_POST['bankname']."','".$_POST['ifsc']."')";
		mysqli_query($conn,$query);
		echo("Record saved...");
	}
}
	

?>