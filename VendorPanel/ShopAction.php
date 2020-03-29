<?php
 include 'connection.php';




if(!empty($_POST['shopname']) /*|| !empty($_POST['email']) || !empty($_POST['phone']) || !empty($_POST['exp']) || $_FILES['image']*/)
{
       $days = $_POST['Mon']."  ".$_POST['Tue']."  ".$_POST['Wed']."  ".$_POST['Thu']."  ".$_POST['Fri']."  ".$_POST['Sat']."  ".$_POST['Sun'];

       $plans = $_POST['Silver']."  ".$_POST['Platinum']."  ".$_POST['Diamoond'];

       $query = "INSERT INTO `shop_info`(`email`, `shop_name`, `address`, `area`, `city`, `employee`, `wifi`, `shop_time`, `closetime`, `days`, `desciption`, `plans`, `landmarks`) VALUES ('".$_POST['hidden']."','".$_POST['shopname']."','".$_POST['Address']."','".$_POST['Area']."','".$_POST['city']."','".$_POST['emp']."','".$_POST['wifi']."','".$_POST['shoptime']."','".$_POST['closetime']."','$days','".$_POST['desc']."','$plans','".$_POST['landmarks']."')";
        mysqli_query($conn, $query); 
}

?>
