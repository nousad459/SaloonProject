<?php
include 'bootstap.php';
include "connection.php";
if(isset($_POST['submit']))
{

	 $serch1 = $_POST['search'];

	$query = "SELECT * FROM `shop_info` WHERE `address` = '$serch1'";
	$result = mysqli_query($conn , $query);
}

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
<form method="post" action="">
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
		</form>
				
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

         
         <?php while ($row = mysqli_fetch_array($result)): ?>

		<div class="container h-35 shadow " style="background-color: #ffffff">
			<?php
			
			$qq = "SELECT * FROM `tbl_images` WHERE `email` = '".$row['email']."'";

			 $ress = mysqli_query($conn ,$qq);
			  $data = mysqli_fetch_array($ress);  

			?>
			<div class="row">
				<div class="col-3 p-2">
					
			   <?php echo '
                
                <a href="SlideImage.php?image='.$data['email'].'">
			   <img src="data:image/jpeg;base64,'.base64_encode($data['images'] ).'" class="img-thumbnail shadow" height="350" width="350" />

                </a>
			   ' ?>

				</div>
				<div class="col-6">
					<h3><strong><?php echo $row['shop_name'] ?></strong></h3>
					<i class="fas fa-space-shuttle fa-xs"></i> <small><?php echo $row['city'] ?></small><br>
					<small><?php echo $row['employee'] ?></small><br>
					<small><?php echo $row['wifi'] ?></small><br>
					<small><?php echo $row['shop_time'] ?></small><br>
					<small><?php echo $row['closetime'] ?></small><br>
					<small><?php echo $row['days'] ?></small><br>
					<small><?php echo $row['plans'] ?></small><br>
					<small><?php echo $row['landmarks'] ?></small><br>
				</div>
         <div class="mt-2 mb-2" style="border-right: 1px solid #CDD0D2"></div>
				
					<div class="row p-5">
						<div class="col-3">
							<form method="post" action="">
                          
                           <input type="hidden" name="email" value="<?php echo $row['email']?>">
                           <input type="hidden" name="shop_name" value="<?php echo $row['shop_name']?>">
                           <input type="hidden" name="city" value="<?php echo $row['city']?>">
                           <input type="hidden" name="employee" value="<?php echo $row['employee']?>">
                           <input type="hidden" name="wifi" value="<?php echo $row['wifi']?>">
                           <input type="hidden" name="shop_time" value="<?php echo $row['shop_time']?>">
                           <input type="hidden" name="closetime" value="<?php echo $row['closetime']?>">
                           <input type="hidden" name="days" value="<?php echo $row['days']?>">
                            <input type="hidden" name="plans" value="<?php echo $row['plans']?>">
                             <input type="hidden" name="landmarks" value="<?php echo $row['landmarks']?>">
                              <input type="hidden" name="desciption" value="<?php echo $row['desciption']?>">

						  <a href="ViewDeals.php?email=<?php echo $row['email']?>" target="_blank"  class="btn btn-success"  style="width: 200px; font-weight: bold; font-size: 20px">View Deal</a>
                             </form>

				        </div>	
					</div>
					
			</div>

        </div>
   <br>
    <?php endwhile; ?>



		
		
	</div>

</body>
</html>  
<?php 

include "footer.php";

?>