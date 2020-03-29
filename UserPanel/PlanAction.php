<?php
 

include 'connection.php';

if(isset($_POST['readRecord']))
{
     $data = ' <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr style="font-weight: bolder;">
        
          <th class="" scope="col">Subscription Id</th>
          <th class="" scope="col">Plan Name</th>
          <th class="" scope="col">Booking Date</th>
           <th class="" scope="col">Expiry Date</th>
            <th class="" scope="col">Remaining Service</th>
             <th class="" scope="col">Price</th>
                </tr>';

             $query = "SELECT * FROM `package_info` WHERE email ='".$_POST['hidden']."'";
             $result = mysqli_query($conn, $query);

             if(mysqli_num_rows($result) > 0)
             {
                    
                    //$number = 1;    
                    while($row = mysqli_fetch_array($result)){

                      $data .= '<tr>
                               
                          <td>' .$row['Subscription_id']. '</td>
                          <td>' .$row['planname']. '</td>
                          <td>' .$row['current_date']. '</td>
                           <td>' .$row['expiry_date']. '</td>

                           <td>' .$row['using_time']. '</td>
                           <td>' .$row['price']. '</td>
                         
                                </tr>';

                           //$number++;     
                    }

             }

            $data.= '</table>';
             echo $data;


  
}


///-----------------------------------------get userid for update---------------

if(isset($_POST['id']) && isset($_POST) != "")
{

  $user_id = $_POST['id'];
  $query = "SELECT * FROM `visa` WHERE visa_no = '$user_id'";
  if(!$result = mysqli_query($conn,$query))
  {
      exit(mysqli_error());

  }

  $response = array();

  if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){

          $response = $row;

           }
      }
      else
      {
        $response['status'] = 100;
        $response['message'] = "Data not Found";
      }

      
      echo json_encode($response);

}

else
{

        $response['status'] = 200;
        $response['message'] = "Invalid Request";

}

?>