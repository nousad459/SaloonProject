<?php

//fetch_images.php

//include('connection.php');

$conn = new PDO("mysql:host=localhost;dbname=saloon_system", "root", "");

$query = "SELECT * FROM tbl_images ORDER BY image_id DESC";

$statement = $conn->prepare($query);

$output = '<div class="row">';

if($statement->execute())
{
 $result = $statement->fetchAll();

 foreach($result as $row)
 {
  $output .= '
  <div class="col-md-2" style="margin-bottom:16px;">
   <img src="data:image/jpeg;base64,'.base64_encode($row['images'] ).'" class="img-thumbnail" />
  </div>
  ';
 }
}

$output .= '</div>';

echo $output;

?>
