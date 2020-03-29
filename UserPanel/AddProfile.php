
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include 'connection.php';

         //session_start();
         $emailID = $_SESSION['emailID'];

         $query = "select *from user_register where email ='$emailID'";
         $result = mysqli_query($conn ,$query);
         $row = mysqli_fetch_array($result);


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
          <h1 class="h3 mb-4 text-gray-800">Add User Profile</h1>

          <!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3" style="background-color: #394263; color: white">
     
      <h4>
        <strong>Fill</strong> Details
      </h4>
                        
  </div>

  <div class="p-5 text-dark">
        




<form id="Profile" name="Profile">

  <div class="row">
  
    <div class="col-md-2">
        <label for="name">NAME</label></div>

        <div class="col-md-4">

     <input type="text" class="form-control btn-sm" id="name" name="name" placeholder="Enter name" required />
       </div>



  <div class="col-md-2">
<label for="email">EMAIL</label></div>
<div class="col-md-4"> 
<input type="email" class="form-control btn-sm" id="email" name="email" placeholder="Enter email" value="<?php echo $row['email'] ?>" readonly />
</div>

</div>
<br>
<div class="row">
  
    <div class="col-md-2">
        <label for="name">Phone</label></div>

        <div class="col-md-4">

     <input type="text" class="form-control btn-sm" id="phone" name="phone" value="<?php echo $row['phone'] ?>" readonly/>
       </div>



  <div class="col-md-2">
<label for="email">Address</label></div>
<div class="col-md-4"> 
<input  class="form-control btn-sm" id="Address" name="Address" placeholder="Enter Addresss" required />
</div>

</div>
<br>
<div class="row">
  
  <div class="col-md-2">Area</div>
  <div class="col-md-4">
    <input type="text" name="Area" id="Area" class="form-control btn-sm" placeholder="Enter Area">

  </div>

  <div class="col-md-2">City</div>
  <div class="col-md-4">
    <input type="text" name="City" id="City" class="form-control btn-sm" placeholder="Enter City">

  </div>
</div>
</form>
<br>
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-4">
      <Button class="btn btn-success" onclick="addProfile()">Submit</Button>
    <a href="PofileInfo.php" class="btn btn-danger">Cancel</a>

  </div>
</div>



<div id="err"></div>
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

//-------------------------------------------

/*$(document).ready(function(){
 $(document).on('change', '#file', function(){
  var name = document.getElementById("file").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
  {
   alert("Invalid Image File");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("file").files[0]);
  var f = document.getElementById("file").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   alert("Image File Size is very big");
  }
  else
  {
   form_data.append("file", document.getElementById('file').files[0]);
   $.ajax({
    url:"AddProfileAction.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
    },   
    success:function(data)
    {
      $('#file').attr("disabled",true);
     $('#uploaded_image').html(data);
    }
   });
  }
 });
});*/



  
 function addProfile(){

    $.ajax({

                url:"ProfileAction.php",
                method:"POST", 
                data:$('#Profile').serialize(),  
                success:function(data)  
                {  
                     $('#Profile')[0].reset(); 
                      //$('#add_name')[0].reset();
                       //$('#visa_part1')[0].reset(); 
                        alert(data);
                        window.location.assign("PofileInfo.php"); 
                }  
             });

}

/*$(document).ready(function (e) {
 $("#form").on('submit',(function(e) {
  e.preventDefault();
  $.ajax({
         url: "ProfileAction.php",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
   beforeSend : function()
   {
    //$("#preview").fadeOut();
    $("#err").fadeOut();
   },
   success: function(data)
      {
    if(data=='invalid')
    {
     // invalid file format.
     $("#err").html("Invalid File !").fadeIn();
    }
    else
    {
     // view uploaded file.
       $("#preview").html(data).fadeIn();
       $("#form")[0].reset(); 
        window.location.assign("PofileInfo.php"); 
       alert("Saved.....");

    }
      },
     error: function(e) 
      {
    $("#err").html(e).fadeIn();
      }          
    });
 }));
});*/

</script>



