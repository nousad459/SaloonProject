<?php
include "connection.php";

$email  = $_GET['image'];

$qq = "SELECT * FROM `tbl_images` WHERE `email` = '".$email."'";

$query=mysqli_query($conn, $qq);
$rowcount=mysqli_num_rows($query);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Search1</title>

	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	<!--------------------forshade---------------->
	    <script src="http://code.jquery.com/jquery-2.1.1.js"></script>
        <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!--------------------endd---------------->


</head>
<body style="background-color: #EBECED; ">

	<div class="container-fluid container-md shadow p-5" style="background-color: #ffffff">

		<div class="row">
			<div class="col-2 ">
				<div class="pull-right">
				<a href="">
			     <img src="img/logo2.gif" style="max-width: 150px; height: 50px" alt="not support"> 
		        </a>
		    </div>
			</div>
			<div class="col-6 pt-1  d-flex">
				<input type="text" name="search" class="form-control" style="min-height: 40px; ">
		<input type="submit" name="submit" value="Search" class="btn btn-success" style="height: 40px;width: 130px; font-weight: bold">
				
			</div>

           
         
			<div class="col-4 ">

				  <div class="pull-right">

				<nav style="list-style: none;">
		   <li class="">
                        <a href="#" class="btn btn-primary" style="  text-decoration: none; font-weight:  bold; color: white " data-toggle="modal" data-target="#modalLUSERForm">UserLogin</a>
			            
                        <a href="#" class="btn btn-primary" style=" text-decoration: none; font-weight:  bold; color: white" data-toggle="modal" data-target="#modalLRForm">VendorLogin</a>

            </li>
			</nav>
			</div>
		</div>
		</div>
		
	</div>

	<!----------------------------------------------->


	<div class="container pt-5">


		<div class="container" style="background-color: #ffffff">

         <br>
   <div class="container  m-0" >


   	<div class="row">
   		
   		<div class="col-6">
   			
   			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
  <?php
  for($i=1;$i<=$rowcount;$i++)
  {
	  $row=mysqli_fetch_array($query);
	  
  ?>
  
  <?php 
  if($i==1)
  {
  ?>
  <div class="carousel-item active">
      <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['images'] ).'" class="img-thumbnail shadow" style="height:330px; width:550px"  alt="..." />';  ?>
    </div>
  <?php	
  }
  else
  {
	?> 
  	<div class="carousel-item ">
     <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['images'] ).'" class="img-thumbnail shadow"  style="height:330px; width:550px"  alt="..." />';  ?>
    </div>
 
  <?php
   }
  }
  ?>
 
    
  </div>
  
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

   		</div>

   		<div class="col-4">
   			fdasgs
   		</div>

   	</div>

 


   </div>
   <br>



		
		
	</div>

	</div>

</body>
</html>  
<?php 

include "footer.php";

?>