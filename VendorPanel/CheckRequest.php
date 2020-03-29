
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include 'connection.php';
$emailID = $_SESSION['emailID'];
 
 $Sub_id = $_GET['Sub_id'];



$query = "select *from package_info where Subscription_id ='$Sub_id'";
$result = mysqli_query($conn,$query);
$row  = mysqli_fetch_array($result);


?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Check Plans Details</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Check Plan Details</h1>

          <!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
  
  
  </div>

  <div class="card-body">

    <div class="text-center">
      <form id="CheckDetails" name="CheckDetails">
      
      <div class="row">
        <div class="col-md-2">Your Phone<i class="text-danger">*</i></div>
        <div class="col-md-2 m-0">
          <input type="text" id="mobile" class="form-control btn-sm" value="<?= $row['Phone'] ?>" readonly> 
        </div>
        <div class="col-md-2 ml-0">
          <button type="button" class="btn btn-success" onclick="CheckMobile()">Send OTP</button>
        </div>
      </div>
      <br>

      <div class="row">
        <div class="col-md-2">Enter OTP<i class="text-danger">*</i></div>
        <div class="col-md-2 m-0">
          <input type="text" id="OTP" disabled="disabled" class="form-control btn-sm" maxlength="6"> 
        </div>
        <div class="col-4 d-flex">
          <div class="col-md-6">
             <button type="button" id="Verify" disabled="disabled" class="btn btn-success" onclick="VerifyOTP()">Verify OTP</button>
          </div>
          <div class="col-md-6">
            <button type="button" id="update" disabled="disabled" class="btn btn-primary" onclick="UpdateRequest()"> Update Request</button>
          </div>
         
           
        </div>
      </div>

      </form>
    </div>
<input type="text" id="sub_id" value="<?= $Sub_id ?>">
<input type="text" id="email" value="<?= $emailID ?>">

    <div class=" p-5 table-responsive text-center" id="ShowRecord">
      
      
    </div>

   
  </div>

        </div>
        <!-- /.container-fluid -->



     
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>







<?php
//include('includes/scripts.php');
include('includes/footer.php');
?>


<script type="text/javascript">
 function CheckMobile()
  {

        var number = $('#mobile').val();
      if(number.length == 10 && number != null)
      {
        var input =  {
                          "mobile_number" : number,
                           "action" : "send_otp"
                     };
           $.ajax({

                  url : 'OTPSNED.php',
                  type : 'post',
                  data : input,
                  success : function(data)
                  {
                     if(data == 1)
                     {
                       alert("OPT send your Number");
                       $('#Verify').attr("disabled", false);
                       $('#OTP').attr("disabled", false);
                        //$("#mobile").attr('readonly','readonly');

                     }
                     else
                     {
                         alert("Wrong Number");

                          $('#Verify').prop("disabled", true);
                          $('#OTP').prop("disabled", true);
                     }
                  }

           });          
      }
      else
      {
        alert("Plz Enter valid phone number");
      }
    }
 
 //---------------------------------Verfy Number--------------------------------------

 function VerifyOTP()
   {
      var otp = $('#OTP').val();
     
        var input =  {
                          "otp" : otp,
                           "action" : "verify_otp"
                     };

 if(otp.length == 6 && otp != null)
 {


           $.ajax ({

                  url : 'OTPSNED.php',
                  type : 'post',
                  dataType : "json",
                  data : input,
                  success : function(data)
                  {
                    if(data.message == 'Your Mobile is verified!')
                    {
                      alert(data.message);
                      $('#update').attr("disabled", false);
                    }
                    else
                    {
                       alert(data.message);
                     $('#update').prop("disabled", true);
                    }

                     
                  },
                  /*error : function()
                  {
                    $('#update').prop("disabled", true);
                    alert("ss");
                  }*/

           });          
}
      else
      {
        alert("Plz Enter valid OTP number");
      }
        
   }


   function UpdateRequest()
   {

        var sub_id = $('#sub_id').val();
        var email = $('#email').val();

         $.ajax ({

                  url : 'updaterequest.php',
                  type : 'post',
                  data : {
                          sub_id:sub_id,
                          email:email
                          },
                  success : function(data)
                  {
                    alert(data);

                   $('#update').prop("disabled", true);
                  }

           });  
   }
</script>



