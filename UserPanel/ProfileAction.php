<?php
 include 'connection.php';

if(!empty($_POST['name']) || !empty($_POST['email']) || !empty($_POST['phone']) )
{

$insert = "INSERT into `user_profile`(`name`, `email`, `phone`, `address`, `area`, `city`) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['Address']."','".$_POST['Area']."','".$_POST['City']."')";

  mysqli_query($conn,$insert);

echo "Record Saved..";

}

?>