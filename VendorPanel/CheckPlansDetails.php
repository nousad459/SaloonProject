
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
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
        <div class="col-3">Enter Subscription Id<i class="text-danger">*</i></div>
        <div class="col-4 m-0">
          <input type="text" id="subId" class="form-control"> 
        </div>
        <div class="col-3 ml-0">
          <button type="button" class="btn btn-success" onclick="readRecords()">Submit</button>
        </div>
      </div>
      </form>
    </div>

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
  
  function readRecords()
{

  //var readRecord = "readRecord";
  /*if($('#subId').val() == '')
  {
    alert("Pls Fill Subscription id..")
  }*/
  var subId = $('#subId').val();


  $.ajax({
              url:"CheckSubscriber.php",
           type: 'post',
           data: { subId:subId,
                

                 },

           success:function(data,status){
                  //alert(data);
                $('#ShowRecord').html(data);
           }

  });


}
</script>

