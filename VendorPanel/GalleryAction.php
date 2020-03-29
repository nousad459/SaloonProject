<?php

//insert.php

include('connection.php');

//$conn = new PDO("mysql:host=localhost;dbname=saloon_system", "root", "");

 $email = $_POST["hidden"];

if(count($_FILES["image"]["tmp_name"]) > 0)
{
 for($count = 0; $count < count($_FILES["image"]["tmp_name"]); $count++)
 {
  $image_file = addslashes(file_get_contents($_FILES["image"]["tmp_name"][$count]));

$query = "INSERT INTO tbl_images(email, images) VALUES ('$email','$image_file')";

  //$statement = $conn->prepare($query);
  //$statement->execute();
  mysqli_query($conn,$query);
 }

 //echo "record saved";
}


?>
