
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
          <h1 class="h3 mb-4 text-gray-800">Bank Details</h1>

          <!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Bank Details
            </button>
  
  </div>

  <div class="card-body">

    <div class="table-responsive" id="ShowRecord">

     <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Username </th>
            <th>Email </th>
            <th>Password</th>
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
     
          <tr>
            <td> 1 </td>
            <td> Funda of WEb IT</td>
            <td> funda@example.com</td>
            <td> *** </td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="edit_id" value="">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="" method="post">
                  <input type="hidden" name="delete_id" value="">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
          </tr>
        
        </tbody>
      </table>-->

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





<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fill Bank Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form_action" name="form_action">
		  
		  <input type="hidden" id="hidden" name="hidden" value="<?php echo $emailID ?>">

        <div class="modal-body">

            <div class="form-group">
                <label> Account's Holder Name </label><i class="text-danger">*</i>
                <input type="text" name="name" class="form-control" placeholder="Enter Account's Holder Name">
            </div>
            <div class="form-group">
                <label>Account Number</label><i class="text-danger">*</i>
                <input type="text" name="accNo" class="form-control" placeholder="Enter Account Number">
            </div>
            <div class="form-group">
                <label>Bank Name</label><i class="text-danger">*</i>
                <input type="text" name="bankname" class="form-control" placeholder="Enter Bank Name">
            </div>
            <div class="form-group">
                <label>IFSC Code</label><i class="text-danger">*</i>
                <input type="text" name="ifsc" class="form-control" placeholder="Confirm IFSC Code">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" onClick="addAccount()" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>
	
	
    <script>
		
$(document).ready(function(){


  readRecords();

}); 
		
		
function readRecords()
{

  //var readRecord = "readRecord";
  var hidden = $('#hidden').val();


  $.ajax({
              url:"ShowAccount.php",
           type: 'post',
           data: { //readRecord:readRecord,
                  hidden:hidden,

                 },

           success:function(data,status){

                $('#ShowRecord').html(data);
           }

  });


}
	 
		function addAccount()
		{
			
			$.ajax({
				url:"AddBank.php",
				method:"post",
				data:$('#form_action').serialize(),
				success:function(data)
				{
					alert(data);
					$('#form_action')[0].reset();
				}
			})
			
		}
	
	</script>	
	
	
	