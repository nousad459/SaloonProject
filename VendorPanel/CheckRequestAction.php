<?php
include 'connection.php';

if(empty($_POST['subId']))
{
           
                      echo '<script type="text/javascript">';
                      echo ' alert("Pls Fill Subscription id..")'; 
                      echo '</script>';
}


else
{

          
           $query = "SELECT * FROM `package_info` WHERE Subscription_id ='".$_POST['subId']."'";
             $result = mysqli_query($conn, $query);

             if(mysqli_num_rows($result) > 0)
             {
                    
                    
                    while($row = mysqli_fetch_array($result)){
                           
                           echo  '<div class="row" >';
                                     
                                    
                             echo     '<table class="table table-bordered">';
                               echo     '<tr>';
                                 echo   '<td style="font-weight:bolder">Plans:</td>';
                                    echo '<td>';
                                       echo $row['planname'];
                                      echo '</td>';
                                      
                                     echo '</tr>';
                                      echo '<tr>';
                                   echo '<td style="font-weight:bolder">Remaining Services:</td>';
                                    echo '<td>';
                                       echo  $row['using_time'];
                                     echo '</td>';
                                      
                                     echo '</tr>';
                                      echo '<tr>';
                                    echo '<td style="font-weight:bolder">Expiration:</td>';
                                    echo '<td>';
                                      echo $row['expiry_date'];
                                      echo '</td>';
                                      
                                     echo '</tr>';
                                       echo '<tr>';
                                    echo '<td></td>';
                                     echo '<td>';
                                     if($row['using_time'] > 0)
                                     {
                                        echo '<a href="CheckRequest.php?Sub_id='.$row['Subscription_id'].'" class="btn btn-danger" >Send Request</a>';
                                     }
                                     else
                                     {
                                         echo '<a href="aa.php?hello='.$row['Subscription_id'].'" class="btn btn-danger disabled" >Send Request</a>';
                                     }
                                      
                                     echo '</td>';
                                      
                                      echo '</tr>';
                                    echo '</tabel>';
                                    echo '</div>';
                            
                           
                         
                    }

                    //echo  $data;

             }
             else
             {
             	      echo '<script type="text/javascript">';
                      echo ' alert("Sorry!!!Record Not Found")'; 
                      echo '</script>';
             }
}
?>