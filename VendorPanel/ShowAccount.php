<?php
 

include 'connection.php';

if(isset($_POST['hidden']))
{
     $data = ' <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
        
          <th class="" scope="col">A/c Holder Name</th>
          <th class="" scope="col">A/c No.</th>
          <th class="" scope="col">Bank Name</th>
          <th class="" scope="col">IFSC Code</th>

         
          <th class="" scope="col" style="color:#1BBAE1;">Edit</th>
           <th class="" scope="col" style="color:#1BBAE1;">Delete</th>

        </tr>';

             $query = "SELECT * FROM `bank_details` WHERE email ='".$_POST['hidden']."'";
             $result = mysqli_query($conn, $query);

             if(mysqli_num_rows($result) > 0)
             {
                    
                    //$number = 1;    
                    while($row = mysqli_fetch_array($result)){

                      $data .= '<tr>
                               
                          <td>' .$row['name']. '</td>
                          <td>' .$row['Accou_no']. '</td>
                          <td>' .$row['bank_name']. '</td>
						   <td>' .$row['ifsc_code']. '</td>
                           

                          
                      
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