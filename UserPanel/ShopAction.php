<?php
 include 'connection.php';




if(!empty($_POST['SubscriptionID']) /*|| !empty($_POST['email']) || !empty($_POST['phone']) || !empty($_POST['exp']) || $_FILES['image']*/)
{
       //$days = $_POST['Mon']."  ".$_POST['Tue']."  ".$_POST['Wed']."  ".$_POST['Thu']."  ".$_POST['Fri']."  ".$_POST['Sat']."  ".$_POST['Sun'];

       //$plans = $_POST['Silver']."  ".$_POST['Platinum']."  ".$_POST['Diamoond'];

       $query = "INSERT INTO `package_info`(`Name`, `email`, `Phone`, `address`, `area`, `city`, `planname`, `price`, `current_date`, `Subscription_id`, `cro_name`, `cro_num`, `expiry_date`, `using_time`) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['Address']."','".$_POST['Area']."','".$_POST['City']."','".$_POST['planname']."','".$_POST['price']."','".$_POST['cdate']."','".$_POST['SubscriptionID']."','".$_POST['CROName']."','".$_POST['CRONum']."','".$_POST['expdate']."','".$_POST['usingtime']."')";
        mysqli_query($conn, $query); 
}

echo "Record Saved";

?>
