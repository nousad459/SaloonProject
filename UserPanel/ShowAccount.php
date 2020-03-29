<?php
 

include 'connection.php';

if(isset($_POST['hidden']))
{
     $data = ' <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
        
          <th class="" scope="col"><strong>Saloon Name</strong></th>
          <th class="" scope="col"><strong>Vendor Name</strong></th>
          <th class="" scope="col"><strong>Service Date</strong></th>
          <th class="" scope="col"><strong>Service Time</strong></th>
          <th class="" scope="col"><strong>Addess</strong></th>
        </tr>';

             $query = "SELECT * FROM `saloon_book` WHERE user_email ='".$_POST['hidden']."'";
             $result = mysqli_query($conn, $query);

             if(mysqli_num_rows($result) > 0)
             {
                    
                    //$number = 1;    
                    while($row = mysqli_fetch_array($result)){

                      $data .= '<tr>
                               
                          <td>' .$row['saloon_name']. '</td>
                          <td>' .$row['saloon_vendor_name']. '</td>
                          <td>' .$row['service_date'].'</td>
						              <td>' .$row['service_time']. '</td>
                          <td>' .$row['address']. '</td>
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