
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

  <style type="text/css">
    .block {
   // border: 1px solid red;
    text-align: center;
    vertical-align: middle;
}
.circle {
    background: #44494B;
    border-radius: 200px;
    color: white;
    height: 140px;
    font-weight: bold;
    width: 140px;
    display: table;
    margin: 20px auto;
    border: 5px solid #E8BE2F;
}

.circle p {
    vertical-align: middle;
    display: table-cell;
        font-size: 20px;
    font-weight: bolder;
}
  </style>

</head>

<body id="page-top">

  

        <!-- Begin Page Content -->
        <div class="container-fluid" style="background-color: white">

          <!-- Page Heading -->
         
          <!-- DataTales Example -->

          <br>
          <br>
<div class="card " >
 

  <div class="card-body" style="background-color: #F4F4F4; color: black">
	  
	 

      <div class="text-center">
        <h2>Our Plan Services</h2>
        <small><i>Etiam imperdiet pulvinar nisl, eu iaculis justo efficitur in.</i></small>
      </div>
         <br>
          <br>
      <div class="row">
        <div class="col-md-4 block">
          <div class="card shadow" >
          
            <div class="card-body">
             <h3 class="card-title text-center">Standard</h3>
            
              <div class="circle">
                 <p><i class="fa fa-rupee-sign"></i> 4000</p>
                
               </div>
              <p class="card-text text-left">Some quick example text to build on the card title and make up the bulk of the card's content.
              Cards are built with as little markup and styles as possible, but still manage to deliver a ton of control and customization. Built with flexbox, they offer easy alignment and mix well with other Bootstrap components. They have no margin by default, so use spacing utilities as needed.
              </p>
              <form action="AddShop.php" method="post">

                 <input type="hidden" name="email" id="email"  value="<?php echo $emailID ?>">
                  <input type="hidden" name="rate" id="rate"  value="4000">
                   <input type="hidden" name="planname" id="planname"  value="Standard">
                    <input type="hidden" name="plan" id="plan"  value="PLSTAN">

                  <input type="submit" name="submit" class="col-md-4 btn btn-primary" value="Select" style="font-weight: bold;">
             </form>
         </div>
        </div>
        </div>
        <div class="col-md-4 block">
          <div class="card shadow" >
          
            <div class="card-body">
             <h3 class="card-title text-center">Featured</h3>
            
              <div class="circle">
                <p><i class="fa fa-rupee-sign"></i> 5000</p>
                
               </div>
              <p class="card-text text-left">Some quick example text to build on the card title and make up the bulk of the card's content.
              Cards are built with as little markup and styles as possible, but still manage to deliver a ton of control and customization. Built with flexbox, they offer easy alignment and mix well with other Bootstrap components. They have no margin by default, so use spacing utilities as needed.
              </p>
              
               <form action="AddShop.php" method="post">

                 <input type="hidden" name="email" id="email"  value="<?php echo $emailID ?>">
                  <input type="hidden" name="rate" id="rate"  value="5000">
                   <input type="hidden" name="planname" id="planname"  value="Featured">
                    <input type="hidden" name="plan" id="plan"  value="PLFEAT">

                  <input type="submit" name="submit" class="col-md-4 btn btn-primary" value="Select" style="font-weight: bold;">
             </form>
         </div>
        </div>
        </div>
        <div class="col-md-4 block">
          <div class="card shadow" >
          
            <div class="card-body">
             <h3 class="card-title text-center">Premium</h3>
            
              <div class="circle">
                <p><i class="fa fa-rupee-sign"></i> 7000</p>
                
               </div>
              <p class="card-text text-left">Some quick example text to build on the card title and make up the bulk of the card's content.
              Cards are built with as little markup and styles as possible, but still manage to deliver a ton of control and customization. Built with flexbox, they offer easy alignment and mix well with other Bootstrap components. They have no margin by default, so use spacing utilities as needed.
              </p>
                <form action="AddShop.php" method="post">

                 <input type="hidden" name="email" id="email"  value="<?php echo $emailID ?>">
                  <input type="hidden" name="rate" id="rate"  value="7000">
                   <input type="hidden" name="planname" id="planname"  value="Premium">
                    <input type="hidden" name="plan" id="plan"  value="PLPREM">

                  <input type="submit" name="submit" class="col-md-4 btn btn-primary" value="Select" style="font-weight: bold;">
             </form>
         </div>
        </div>
        </div>
      </div>
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