
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 

$emailID = $_SESSION['emailID'];
?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>User Package</title>

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
          <h1 class="h3 mb-4 text-gray-800">Shop Information</h1>

          <!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
   
            <a href="AddShop.php"  class="btn btn-primary" >
              Add Shop Information
            </a>
    
  </div>

  <div class="card-body">
	  
	  <input type="hidden" name="hidden" id="hidden"  value="<?php echo $emailID ?>">

    <div class="table-responsive" id="ShowRecord">

      

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



	
 <script>
		
$(document).ready(function(){


  readRecords();

}); 
		
		
function readRecords()
{

  //var readRecord = "readRecord";
  var hidden = $('#hidden').val();


  $.ajax({
            url:"ViewShpoInfo.php",
           type:'post',
           data:{ //readRecord:readRecord,
                  hidden:hidden,

                },

           success:function(data,status){

                $('#ShowRecord').html(data);
           }

  });


}	


	</script>