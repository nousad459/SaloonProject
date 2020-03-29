<?php
 

include 'connection.php';

if(isset($_POST['hidden']))
{
     $data = ' <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
        
          <th class="" scope="col">Shop Name</th>
          <th class="" scope="col">Address</th>
          <th class="" scope="col">Area</th>
          <th class="" scope="col">City</th>
		   <th class="" scope="col">Days</th>
		   <th class="" scope="col">Plans</th>

         
          <th class="" scope="col" style="color:#1BBAE1;">Edit</th>
           <th class="" scope="col" style="color:#1BBAE1;">Delete</th>

        </tr>';

             $query = "SELECT * FROM `shop_info` WHERE email ='".$_POST['hidden']."'";
             $result = mysqli_query($conn, $query);

             if(mysqli_num_rows($result) > 0)
             {
                    
                    //$number = 1;    
                    while($row = mysqli_fetch_array($result)){

                      $data .= '<tr>
                               
                          <td>' .$row['shop_name']. '</td>
                          <td>' .$row['address']. '</td>
                          <td>' .$row['area']. '</td>
						   <td>' .$row['city']. '</td>
						   <td>' .$row['days']. '</td>
						   <td>' .$row['plans']. '</td>
                           

                          
                      
                               <td>
                                      
                                       <a href="ViewVisa.php?id='.$row['email'].'"  <i class="fa fa-eye text-dark"></i> </a> 


                                        

                                       </td>
                                  
                                      
                                       <td>
                                      
                                       <a href="ViewVisa.php?id='.$row['email'].'"  <i class="fa fa-eye text-dark"></i> </a> 

                                        

                                       </td>
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