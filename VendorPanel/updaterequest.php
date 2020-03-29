<?php

include 'connection.php';
 
   if(!empty($_POST['sub_id']) && !empty($_POST['email']))
   {
   	  $query = "update package_info set `service_giver_id` = '".$_POST['email']."', `status` = 'Confirm', `using_time`= `using_time` - 1 where `Subscription_id` = '".$_POST['sub_id']."'";
   	  mysqli_query($conn , $query);
   	  echo "Request Updated..";
   }
   else
   { 
        echo "data not filled";
   }
?>