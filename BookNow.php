<?php
  
  include 'connection.php';

if(!empty($_POST['mobile']) && !empty($_POST['hiddenEmail']) && !empty($_POST['hiddenDate']) && !empty($_POST['hiddenTime']))
  {
             
          //------------------------------fetch user record---------------------------------------    
         $userquery = "select *from user_profile where phone = '".$_POST['mobile']."'";
         $result = mysqli_query($conn, $userquery);
         $row  = mysqli_fetch_array($result);
         //echo $row['name'].$row['phone'].$row['email'];

         //------------------------------fetch vendor record---------------------------------------

         $vendor = "select *from vendor_info where email = '".$_POST['hiddenEmail']."'";
         $vendorresult = mysqli_query($conn, $vendor);
         $vendorrow  = mysqli_fetch_array($vendorresult);

         //------------------------------fetch Shop record---------------------------------------

         $shop = "select *from shop_info where email = '".$_POST['hiddenEmail']."'";
         $shopresult = mysqli_query($conn, $shop);
         $shoprow  = mysqli_fetch_array($shopresult);


         #-----------------------------inser record-----------------------------------

         $insert  = "INSERT INTO `saloon_book`(`user_name`, `user_phone`, `user_email`, `service_date`, `service_time`, `saloon_name`, `address`, `saloon_vendor_name`, `saloon_vendor_email`) VALUES ('".$row['name']."','".$row['phone']."','".$row['email']."','".$_POST['hiddenDate']."','".$_POST['hiddenTime']."','".$shoprow['shop_name']."','".$shoprow['address']."','".$vendorrow['name']."','".$vendorrow['email']."')";
          mysqli_query($conn, $insert);

          echo "Booking Completed....";
           
          
   }
  else
  {
  	    echo "Feild are empty";
  }
 

?>