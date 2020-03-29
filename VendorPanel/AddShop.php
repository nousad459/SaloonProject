
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
          <h1 class="h3 mb-4 text-gray-800">Add Profile</h1>

          <!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3" style="background-color: #394263; color: white">
     
      <h4>
        <strong>Sponsor</strong> Information
      </h4>
                        
  </div>

<form id="shop" name="shop" >
  <div class="p-5 text-dark">
    <input type="hidden" name="hidden" value="<?php echo $emailID ?>">
          <div class="row">

                <div class="col-md-2">
                   Shop Name <i class="text-danger" >*</i>
                </div>
                <div class="col-md-4">
                    
                     <div class="form-group">
                      
                     <input type="text" class="form-control btn-sm" id="shopname" name="shopname" placeholder="Enter Shop Name ">
                     </div>
                </div>
              <div class="col-md-2">
                   Address <i class="text-danger" >*</i>
                </div>
                <div class="col-md-4">
                    
                     <div class="form-group">
           
                    <input type="text" class="form-control btn-sm" id="Address" name="Address" placeholder="Enter Address">
                     </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-2">
                    Area <i class="text-danger" >*</i>
                </div>
                <div class="col-md-4">
                    
                     <div class="form-group">
                      
                     <input type="text" class="form-control btn-sm" id="Area" name="Area" placeholder="Enter  Area ">
                     </div>
                </div>
              <div class="col-md-2">
                   City <i class="text-danger" >*</i>
                </div>
                <div class="col-md-4">
                    
                     <div class="form-group">
           
                    <input type="text" class="form-control btn-sm" id="city" name="city" placeholder="Enter City">
                     </div>
                </div>
            </div>

              <div class="row">

                <div class="col-md-2">
                    Employees <i class="text-danger" >*</i>
                </div>
                <div class="col-md-4">
                    
                     <div class="form-group">
                      
                     <input type="text" class="form-control btn-sm" id="emp" name="emp" placeholder="Enter  Employees ">
                     </div>
                </div>
              <div class="col-md-2">
                   WiFi <i class="text-danger" >*</i>
                </div>
                <div class="col-md-4">
                    
                     <div class="form-group">
           
                    <select class="form-control btn-sm" id="wifi" name="wifi">
                       <option>Yes</option>
                       <option>No</option>
                    </select>
                     </div>
                </div>
            </div>
             <div class="row">

                <div class="col-md-2">
                    Shop Open/Close Timing <i class="text-danger" >*</i>
                </div>
                <div class="col-md-2">
                    
                     <div class="form-group">
                      
                     <select  class="form-control btn-sm" id="shoptime" name="shoptime" >
                       <option>8:00 AM </option>
                        <option>9:00 AM </option>
                         <option>10:00 AM </option>
                     </select>
                     </div>
                </div>
                 <div class="col-md-2">
                    
                     <div class="form-group">
                      
                     <select  class="form-control btn-sm" id="closetime" name="closetime" >
                       <option>9:00 PM</option>
                         <option>10:00 PM</option>
                          <option>11:00 PM</option>
                           <option>11:30 PM</option>
                     </select>
                     </div>
                </div>
              <div class="col-md-2">
                   Days <i class="text-danger" >*</i>
                </div>
                <div class="col-md-4">
                    
                     <div class="form-group">
           
                     Mon
                      <input type="checkbox"  id="Mon" name="Mon" value="Mon" class="bigger">
                       Tue
                      <input type="checkbox" id="Tue" name="Tue" value="Tue" class="bigger">
                       Wed
                      <input type="checkbox" id="Wed" name="Wed" value="Wed" class="bigger">
                      Thu
                      <input type="checkbox" id="Thu" name="Thu" value="Thu" class="bigger">
                       Fri
                      <input type="checkbox" id="Fri" name="Fri" value="Fri" class="bigger">
                       Sat
                      <input type="checkbox" id="Sat" name="Sat" value="Sat" class="bigger">
                      Sun
                      <input type="checkbox" id="Sun" name="Sun" value="Sun" class="bigger">
                     </div>
                </div>
            </div>

             <div class="row">

                <div class="col-md-2">
                    Description <i class="text-danger" >*</i>
                </div>
                <div class="col-md-10">
                    
                     <div class="form-group">
                      
                     <textarea class="form-control btn-sm" id="desc" name="desc" rows="4" placeholder="Enter  Area "></textarea>
                     </div>
                </div>
            
            </div>

             <div class="row">

                <div class="col-md-2">
                    Plans <i class="text-danger" >*</i>
                </div>
                <div class="col-md-4">
                    
                     <div class="form-group">
                      Silver
                      <input type="checkbox" name="Silver" id="Silver" value="Silver" class="bigger">
                       Platinum
                      <input type="checkbox" name="Platinum" id="Platinum" value="Platinum" class="bigger">
                       Diamoond
                      <input type="checkbox" name="Diamoond" id="Diamoond" value="Diamoond" class="bigger">


                     </div>
                </div>

                 <div class="col-md-2">
                    Land Marks <i class="text-danger" >*</i>
                </div>
                <div class="col-md-4">
                  
                      <input type="text" name="landmarks" id="landmarks" class="form-control btn-sm">


                     </div>
              </div>

           
</form>

            <div class="row">

                <div class="col-md-2">
                    Shop Gallery Image <i class="text-danger" >*</i>
                </div>
                <div class="col-md-2 d-flex">
                    <div class="file-field">
                 <div class="btn btn-rounded purple-gradient btn-sm float-left">
                   <form method="post" id="upload_multiple_images" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-10">
                <input type="hidden" name="hidden" id="hidden"  value="<?php echo $emailID ?>">
                <input type="file" name="image[]" id="image" multiple accept=".jpg, .png, .gif" />
              </div>
              <div class="col-md-2">
                <input type="submit" name="insert" id="insert" value="Upload" class="btn btn-info" />
              </div>
              </div>
            </form>
                     <br />

                      <br />
                               




                 </div>

                </div>
                     
                </div>
                 
                <div id="images_list"></div>
            
            
           
            </div>

  <br> <br> <br>
  <div class="row">
    <div class="col-md-10"></div>
    <div class="col-md-2 ">
      <div class="pull-right">
         <button type="button" class="btn btn-success" onclick="addMore()">Submit</button>
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
        email = $("#hidden").val();
        $.ajax({
            url:"fetch_images.php",
            method:"post",
            data:{ email:email },
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
                      alert("Record Saved..");
                     // alert(data);  
                     $('#shop')[0].reset();  
                }  
             });
}









</script>



