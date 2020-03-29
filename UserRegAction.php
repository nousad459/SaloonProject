<?php
include 'connection.php';
//extract($_POST);

if(isset($_POST["user_name"]))
{
 $username = mysqli_real_escape_string($conn, $_POST["user_name"]);
 $query = "SELECT * FROM user_register WHERE email = '".$username."'";
 $result = mysqli_query($conn, $query);
 echo mysqli_num_rows($result);
}

if(isset($_POST['contactFrmSubmit']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['password']) ){
     
    // Submitted form data
    //$email   = $_POST['email'];
    //$email  = $_POST['email'];

$query = "INSERT INTO `user_register`(`email` , `phone` , `password`) VALUES ('".$_POST['email']."','".$_POST['phone']."','".$_POST['password']."')";

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