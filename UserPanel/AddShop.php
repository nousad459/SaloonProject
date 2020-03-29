
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include "connection.php";

//$emailID = $_SESSION['emailID'];

if (isset($_POST['submit'])) {

   $email = ($_POST['email']);
   $rate = ($_POST['rate']);
   $planname = ($_POST['planname']);
   $plan = ($_POST['plan']);
   $rand = rand(1,10000);
   $code = $plan.$rand;

   $query = "select * from user_profile where  email = '$email'";
   $result = mysqli_query($conn, $query);
   
 
}

/*$Code = "USER";
$num = "1001";*/

  $cdate = date("Y-m-d");

 $date = new DateTime($cdate);
 $date->add(new DateInterval('P183D'));
 $sixMonthDate = $date->format('Y-m-d') . "\n";
         
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
          <h1 class="h3 mb-4 text-gray-800">Add Package</h1>

          <!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3" style="background-color: #394263; color: white">
     
      <h4>
        <strong>Fill</strong> Package
      </h4>
                        
  </div>

<form id="shop" name="shop" >

  <div class="p-5 text-dark">
   
          <div class="row">

                <div class="col-md-2">
                  Name 
                </div>
                <div class="col-md-4">
                    
                     <div class="form-group">

                      <?php while($row = mysqli_fetch_array($result)): ?>
                      
                     <input type="text" class="form-control btn-sm" id="name" name="name" value="<?php echo $row['name'] ?>" readonly>
                     </div>
                </div>
              <div class="col-md-2">
                   Email 
                </div>
                <div class="col-md-4">
                    
                     <div class="form-group">
           
        <input type="text" class="form-control btn-sm" id="email" name="email" value="<?php echo $row['email'] ?>" readonly>
                     </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-2">
                    Phone
                </div>
                <div class="col-md-4">
                    
                     <div class="form-group">
                      
                     <input type="text" class="form-control btn-sm" id="phone" name="phone" value="<?php echo $row['phone'] ?>" readonly>
                     </div>
                </div>
              <div class="col-md-2">
                   Address 
                </div>
                <div class="col-md-4">
                    
                     <div class="form-group">
           
                    <input type="text" class="form-control btn-sm" id="Address" name="Address" value="<?php echo $row['address'] ?>" readonly>
                     </div>
                </div>
            </div>

              <div class="row">

                <div class="col-md-2">
                    Area 
                </div>
                <div class="col-md-4">
                    
                     <div class="form-group">
                      
                     <input type="text" class="form-control btn-sm" id="Area" name="Area" value="<?php echo $row['area'] ?>" readonly>
                     </div>
                </div>
              <div class="col-md-2">
                   City 
                </div>
                <div class="col-md-4">
                    
                     <div class="form-group">
           
                    <input type="text" class="form-control btn-sm" id="City" name="City" value="<?php echo $row['city'] ?>" readonly>
                     
                     <?php endwhile; ?>
                     </div>
                </div>
            </div>
            <br>
          <div >

          <h3>Your Order</h3>
          </div>
          <br>

           <div class="row">

             <div class="col-md-2">
                    User Subscription ID <i class="text-danger" >*</i>
                </div>
                <div class="col-md-4">
                    
                     <div class="form-group">
                      
                     <input type="text" class="form-control btn-sm" id="SubscriptionID" name="SubscriptionID" value="<?php echo $code ?>" readonly>
                   </div>
            
                  </div>

                <div class="col-md-2">
                    Current Date <i class="text-danger" >*</i>
                </div>
                <div class="col-md-4">
                    
                     <div class="form-group">
                      
                     <input type="text" class="form-control btn-sm" id="cdate" name="cdate"  value="<?php echo date("Y-m-d") ?>" readonly>
                   </div>
            
                  </div>

                  
          </div>


            <div class="row">

                <div class="col-md-2">
                    Plan Name <i class="text-danger" >*</i>
                </div>
                <div class="col-md-4">
                    
                     <div class="form-group">
                      
                     <input type="text" class="form-control btn-sm" id="planname" name="planname"  value="<?php echo $planname ?>" readonly>
                   </div>
            
                  </div>

                   <div class="col-md-2">
                    Price <i class="text-danger" >*</i>
                </div>
                <div class="col-md-4">
                    
                     <div class="form-group">
                      
                     <input type="text" class="form-control btn-sm" id="price" name="price" value="<?php echo $rate ?>" readonly>
                   </div>
            
                  </div>
          </div>


           <div class="row">

                <div class="col-md-2">
                    CRO Name <i class="text-danger" >*</i>
                </div>
                <div class="col-md-4">
                    
                     <div class="form-group">
                      
                     <input type="text" class="form-control btn-sm" id="CROName" name="CROName"  >
                   </div>
            
                  </div>

                   <div class="col-md-2">
                   CRO Number <i class="text-danger" >*</i>
                </div>
                <div class="col-md-4">
                    
                     <div class="form-group">
                      
                     <input type="text" class="form-control btn-sm" id="CRONum" name="CRONum" >
                   </div>
            
                  </div>
          </div>

           <div class="row">

                <div class="col-md-2">
                    Expiry Date <i class="text-danger" >*</i>
                </div>
                <div class="col-md-4">
                    
                     <div class="form-group">
                      
    <input type="text" class="form-control btn-sm" id="expdate" name="expdate"  value="<?php echo $sixMonthDate ?>" readonly>
                   </div>
            
                  </div>

                   <div class="col-md-2">
                    Using Time <i class="text-danger" >*</i>
                </div>
                <div class="col-md-4">
                    
                     <div class="form-group">
                      
                     <input type="text" class="form-control btn-sm" id="usingtime" name="usingtime" value="20" readonly>
                   </div>
            
                  </div>
          </div>
             
           

             

           
</form>

           
  <br> <br> <br>
  <div class="row">
    <div class="col-md-10"></div>
    <div class="col-md-2 ">
      <div class="pull-right">
         <button type="button" id="subBut" class="btn btn-success" onclick="addMore()">Submit</button>
           <a href="shopInfo.php" class="btn btn-danger" >Cancel</a>
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

    //load_images();

    function load_images()
    {
        $.ajax({
            url:"fetch_images.php",
            success:function(data)
            {
                $('#images_list').html(data);
            }
        });
    }
 
    $('#upload_multiple_images').on('submit', function(event){
        event.preventDefault();
        var image_name = $('#image').val();
        if(image_name == '')
        {
            alert("Please Select Image");
            return false;
        }
        else
        {
            $.ajax({
                url:"GalleryAction.php",
                method:"POST",
                data: new FormData(this),
                contentType:false,
                cache:false,
                processData:false,
                success:function(data)
                {
                    $('#image').val('');
                    //alert(data);
                    load_images();
                }
            });
        }
    });
 
});  


 function addMore(){

             $.ajax({

                url:"ShopAction.php",
                method:"POST", 
                data:$('#shop').serialize(),  
                success:function(data)  
                {  
                      //alert("Record Saved..");
                     alert(data);  
                     //$('#subBut').attr("disabled","disabled");
                     window.location.replace("Plan.php");
                     $('#shop')[0].reset();  
                }  
             });
}









</script>



