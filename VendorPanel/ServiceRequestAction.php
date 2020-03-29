<?php
 

include 'connection.php';

if(isset($_POST['readRecord']))
{
     $data = ' <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
        
          <th class="" scope="col"><strong>User Name</strong></th>
          <th class="" scope="col"><strong>Service Date</strong></th>
          <th class="" scope="col"><strong>Service Time</strong></th>

        </tr>';

             $query = "SELECT * FROM `saloon_book` WHERE saloon_vendor_email ='".$_POST['hidden']."'";
             $result = mysqli_query($conn, $query);

             if(mysqli_num_rows($result) > 0)
             {
                    
                    //$number = 1;    
                    while($row = mysqli_fetch_array($result)){

                      $data .= '<tr>
                               
                          <td>' .$row['user_name']. '</td>
                          <td>' .$row['service_date']. '</td>
                          <td>' .$row['service_time']. '</td>
                           

                          
                      
                
                                </tr>';

                           //$number++;     
                    }

             }

            $data.= '</table>';
             echo $data;


  
}