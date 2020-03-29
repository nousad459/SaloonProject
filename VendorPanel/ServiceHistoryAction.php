<?php
 

include 'connection.php';

if(isset($_POST['readRecord']))
{
     $data = ' <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
         <th class="" scope="col"><strong>#</strong></th>
          <th class="" scope="col"><strong>User Name</strong></th>
          <th class="" scope="col"><strong>Subscription Id</strong></th>
          <th class="" scope="col"><strong>Status</strong></th>

        </tr>';

             $query = "SELECT * FROM `package_info` WHERE service_giver_id ='".$_POST['hidden']."'";
             $result = mysqli_query($conn, $query);

             if(mysqli_num_rows($result) > 0)
             {
                    
                    $number = 1;    
                    while($row = mysqli_fetch_array($result)){

                      $data .= '<tr>
                          
                          <td>' .$number. '</td>
                          <td>' .$row['Name']. '</td>
                          <td>' .$row['Subscription_id']. '</td>
                          <td class="text-success"><strong>' .$row['status']. '</strong></td>
                           

                          
                      
                
                                </tr>';

                           $number++;     
                    }

             }

            $data.= '</table>';
             echo $data;


  
}