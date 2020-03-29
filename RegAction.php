<?php
include 'connection.php';
//extract($_POST);

if(isset($_POST['contactFrmSubmit']) && !empty($_POST['email']) && !empty($_POST['password']) ){
     
    // Submitted form data
    //$email   = $_POST['email'];
    //$email  = $_POST['email'];

$query = "INSERT INTO `register`(`email`, `password`) VALUES ('".$_POST['email']."','".$_POST['password']."')";

if(!mysqli_query($conn,$query))
{
	 $status = 'err';
}
	else
	{
		 $status = 'ok';
	}
	
	  echo $status;die;
}


?>