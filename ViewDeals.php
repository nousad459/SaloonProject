<?php

include 'bootstap.php';
include "connection.php";
include 'CalLibrary.php';

/*session_start();
//$_SESSION['emailID'];
if(isset($_POST['userLOg']))
{
   $user = $_SESSION['emailID'];
}*/

$email = $_GET['email'];
 date_default_timezone_set('Asia/Calcutta');
 $time = date('h:i A');

 $start = new DateTime($time);

/*if(isset($_POST['submit']))
{*/

//$email  = $_POST['email'];
/*$shop_name  = $_POST['shop_name'];
$city  = $_POST['city'];
$employee  = $_POST['employee'];
$wifi  = $_POST['wifi'];
$shop_time  = $_POST['shop_time'];
$closetime  = $_POST['closetime'];*/

 //$end = new DateTime($closetime);

//$days  = $_POST['days'];
/*$plans  = $_POST['plans'];
$landmarks  = $_POST['landmarks'];
$desciption  = $_POST['desciption'];*/


$ww = "SELECT * FROM `shop_info` WHERE `email` = '".$email."' ";
$RES = mysqli_query($conn, $ww);

while($SSS = mysqli_fetch_array($RES)){
  $shop_name  = $SSS['shop_name'];

  $city  = $SSS['city'];
$employee  = $SSS['employee'];
$wifi  = $SSS['wifi'];
$shop_time  = $SSS['shop_time'];
$closetime  = $SSS['closetime'];
 

   $days  = $SSS['days'];

   $plans  = $SSS['plans'];
$landmarks  = $SSS['landmarks'];
$desciption  = $SSS['desciption'];

}
$end = new DateTime($closetime);

$qq = "SELECT * FROM `tbl_images` WHERE `email` = '".$email."'";

$query=mysqli_query($conn, $qq);
$rowcount=mysqli_num_rows($query);



 $query_vendor = "SELECT * FROM `vendor_info` WHERE `email` = '".$email."'";

 $Result = mysqli_query($conn, $query_vendor);

  $data = mysqli_fetch_array($Result);

//echo $VendorNmae  =  $data['name'];

//$image = $data['profile_photo'];



//}



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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style type="text/css">
  
   #box
  {
   width:105%;
   max-width:500px;
   border:1px solid #ccc;
   border-radius:5px;
   
   box-sizing:border-box;
   height:auto;
  }

  #boxUser
  {
   width:100%;
   max-width:500px;
   border:1px solid #ccc;
   border-radius:5px;
   margin:0 auto;
   padding:0 20px;
   box-sizing:border-box;
   height:auto;
  }

  .modal-open {

  padding-right: 0 !important;
  overflow: visible;
}
html {
  overflow-y: scroll !important;
}
</style>

</head>
<body style="background-color: #EBECED;" class="p-0">

  <div class="load-container">

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
       
        <div id="userShow"></div>

				  <div class="pull-right">

				<nav style="list-style: none;">
		   <li class="">
                        <a href="#" name="userLOg" class="btn btn-primary" style="  text-decoration: none; font-weight:  bold; color: white " data-toggle="modal" data-target="#modalLUSERForm">UserLogin</a>
			            
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
   		
   		<div class="col-md-7">
   			
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

  <h1 ><?php echo $shop_name; ?></h1>
  <div class="carousel-item active">

      <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['images'] ).'" class="img-thumbnail shadow" style="height:400px; width:650px"  alt="..." />';  ?>
    </div>
  <?php	
  }
  else
  {
	?> 
  	<div class="carousel-item ">
     <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['images'] ).'" class="img-thumbnail shadow"  style="height:400px; width:650px"  alt="..." />';  ?>
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

   		<div class="col-md-4 pt-5 " >
        <br>
        <br>
     <form method="post" action="booking.php">
      <div id="box" class="pl-3">
        <h2>Shop Information</h2>

       
       <div class="d-flex">
   
     <img src="<?= 'VendorPanel/'.$data['profile_photo']; ?>" style="height: 70px;width: 75px; border-radius: 50px;    margin-left: 10px;">

     <div class="sidebar-brand-text mx-3 pl-3"><strong>VENDOR NAME</strong>
      <br>
             <div class="pl-4"> <small><?= $data['name'] ?></small></div>
     </div>

  </div>
  

       <h4 ><strong>Address:</strong>  <?php echo $city; ?></h4>
        <h4 ><strong>Land Mark: </strong>  <?php echo $landmarks; ?></h4>
         <h4 ><strong>Status: </strong>  <?php 


                 if($start->getTimestamp() < $end->getTimestamp())
                 {
                       
                        echo '<label class="text-success"> Open</label>';
                 } 
                     else
                     { echo '<label class="text-danger"> Close</label>';

                       
                      }

                     ?></h4>
         <h3>Book Your Schedule</h3>
       
         <div class="d-flex">

          <input type="hidden" name="email" value="<?= $email ?>">

          
         <h4 ><strong><i class="fa fa-calendar"></i></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4> <input autocomplete="off" class="col-md-8 form-control" type="text" id="date" name="date" required>
         </div>
         <div class="d-flex">
         <h4 ><strong><i class="fa fa-clock-o"></i></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4> <input autocomplete="off"  class="col-md-8 form-control" type="time" id="time" name="time" required>
         </div>
          
          

         <br>
         <input  type="submit" class="btn btn-warning " style="width: 150px; height:50px ; font-weight: bold; color: black; font-size: x-large;" name="submit" formtarget="_blank"  value="Booking">
        
         <br>
          <br>
       </div>

       </form>

      
   		</div>

   	</div>

 


   </div>
   <br>



		
		
	</div>

  <div class="container h-75 " style="background-color: #ffffff; " >

    <div class="" style="border:1px solid #ccc; border-radius: 5px">
      
      <div class="pl-5 mt-0">
        
           <h2>Saloon Accessories</h2>
      
       <div class="row">
         <div class="col-4">
           
             <h4 ><strong>Wifi:</strong>  <?php echo $wifi; ?></h4>
         </div>
         <div class="col-4">
           
            <h4 ><strong>No of Staff:</strong>  <?php echo $employee; ?></h4>
         </div>
       </div>

       <div class="row">
         <div class="col-4">
           
             <h4 ><strong>Shop Time:</strong>  <?php  echo $shop_time." - ".$closetime; ?></h4>
         </div>
         <div class="col-4">
           
            <h4 ><strong>Experience:</strong>  <?= $data['experience']." Yrs" ?></h4>
         </div>
       </div>

       <div class="row">
         <div class="col-4">
           
             <h4 ><strong>Days:</strong>  <?php 

              if(strlen(trim($days)) <= 28)
              {

                  $str = $days;
                  $s = explode(" ",$str);
                  foreach ($s as $a=>$b){    
                      if ( trim($b) ) {
                       print "$b<br>";
                       echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
                      }
                  }
  

                // echo ; 

                   echo '<label class="text-danger pt-3 pl-0">(Sunday Close)</label>';

                 
              }
              else
              {   
                  $str = $days;
                  $s = explode(" ",$str);
                  foreach ($s as $a=>$b){    
                      if ( trim($b) ) {
                       print "$b<br>";
                       echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
                      }
                  }

                  echo '<label class="text-warning pt-3 pl-0">(Sunday Open)</label>';
                  
                  //echo strlen(trim($days)); 
              }

              ?>
            </h4>
         </div>
         <div class="col-3">
           
            <h4 ><strong>Plans:</strong>  <?php


             //echo $plans; 

                  $str = $plans;
                  $s = explode(" ",$str);
                  foreach ($s as $a=>$b){    
                      if ( trim($b) ) {
                       echo nl2br("$b"."<br>".PHP_EOL);
                       echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
                      }
                  }


             ?></h4>
         </div>

         <div class="col-4 " style="border:1px solid #ccc; border-radius: 5px">
           

           Map
         </div>
       </div>
           
  

      </div>
        
    </div>


<br>
<br>

      <div class="h-25" style="border:1px solid #ccc; border-radius: 5px">
      
      <div class="pl-5 pr-2 mt-0">
        
           <h2>Description of Saloon</h2>

           <strong><?php echo $desciption; ?></strong>
      
      
           
  

      </div>
        
    </div>

      


  </div>

	</div>
</div>
</body>
</html>  
<?php 

include "footer.php";

?>

<!-------------------------------user modal---------------------->



<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLUSERForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

  <div class="modal-dialog cascading-modal p" role="document">

    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">
        <div class="pl-5"> <h3>User Login</h3></div>
        <hr>

     
        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel9" role="tab"><i class="fas fa-user mr-1"></i>
              Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel10" role="tab"><i class="fas fa-user-plus mr-1"></i>
              Register</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel9" role="tabpanel">

            <!--Body-->
            <div class="modal-body">
        <div id="boxUser">
          <br>
         <form method="post">
                    <div class="form-group">
                        <label for="UseremailID">Emai Id</label>
                        <input type="text" class="form-control" id="UseremailID" name="UseremailID" placeholder="Enter your email"/>
             
                    </div>

               <div class="form-group">
                        <label for="Userpass">Password</label>
                        <input type="password" class="form-control" id="Userpass" name="Userpass" placeholder="Enter your password"/>
                    </div>

              
                <div class="text-center">
        <input type="button" name="Userlogin" id="Userlogin" class="btn btn-primary" value="Login"  />
        </div>
           <div id="Usererror"></div>
        </form>
          <br>
        </div>  
        
            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-center  mt-1">
                <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
              </div>
        <button type="button" class="btn btn-danger ml-auto" onClick=""  data-dismiss="modal">Close</button>
            </div>

          </div>
          <!--/.Panel 7-->
      
<!------------------------------------------------------------------------------>
      
      
      

          <!--Panel 8-->
          <div class="tab-pane fade" id="panel10" role="tabpanel">

            <!--Body-->
            <div class="modal-body">
         <p class="statusMsg"></p>
         <div id="boxUser">
          <br>
         <form role="form">
                    <div class="form-group">
                        <label for="emailuser">Emai Id</label>
                        <input type="text" class="form-control" id="emailuser" placeholder="Enter your email"/>
            <span id="userAVL"></span>
                    </div>

               <div class="form-group">
                        <label for="passuser">Password</label>
                        <input type="password" class="form-control" id="passuser" placeholder="Enter your password"/>
                    </div>

               <div class="form-group">
                        <label for="C_passuser">Confirm Password</label>
                        <input type="password" class="form-control" id="C_passuser" placeholder="Enter your Confirm Password"/>
                    </div>

              
          
        </form>
        <br>
      </div>
      <br>
        <div class="text-center">
        <button type="button" id="" class="btn btn-primary UsersubmitBtn" onclick="userRegForm()" >SUBMIT</button>
        </div>
        
        

            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options ">
                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
              </div>
              <button type="button" class="btn btn-danger ml-auto" onClick=""  data-dismiss="modal">Close</button>
            </div>
          </div>
          <!--/.Panel 8-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login / Register Form-->


<script type="text/javascript">

    $( function() {
    $( "#date" ).datepicker({
      dateFormat: "yy-mm-dd"
    });
  } );

  

  //------------------------------user REgistration--------------------
  
  

  $(document).ready(function(){  
   $('#emailuser').blur(function(){

     var email = $(this).val();

     $.ajax({
      url:'UserRegAction.php',
      method:"POST",
      data:{user_name:email},
      success:function(data)
      {
       if(data != '0')
       {
        $('#userAVL').html('<span class="text-danger">This Email Id Already Registered.</span>');
        $('.UsersubmitBtn').attr("disabled", true);
       }
       else
       {
        $('#userAVL').html('<span class="text-success">You are new User.</span>');
        $('.UsersubmitBtn').attr("disabled", false);
       }
      }
     })

  });
 });  
  
  
  
  function userRegForm(){
    
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var email = $('#emailuser').val();
    var password = $('#passuser').val();
    var C_pass = $('#C_passuser').val();
    if(email.trim() == '' ){
        alert('Please enter your email.');
        $('#email').focus();
        return false;
    }else if(password.trim() == '' ){
        alert('Please enter your password.');
        $('#password').focus();
        return false;
    }else if(password.length < 8 ){
        alert('Password should 8 chareters');
        $('#password').focus();
        return false;
    }else if(email.trim() != '' && !reg.test(email)){
        alert('Please enter valid email.');
        $('#email').focus();
        return false;
    }else if(C_pass.trim() != password.trim()){
        alert('Password not match!');
        $('#C_pass').focus();
        return false;
    }else{
        $.ajax({
            type:'POST',
            url:'UserRegAction.php',
            data:'contactFrmSubmit=1&email='+email+'&password='+password,
            beforeSend: function () {
                $('.submitBtn').attr("disabled","disabled");
                $('.statusMsg').attr("disabled","disabled");
            },
            success:function(msg){
                if(msg == 'ok'){
                    $('#email').val('');
                    $('#password').val('');
           $('#C_pass').val('');
                    
                    $('.statusMsg').html('<span style="color:green;">You are Registerd Successfully!!!</p>');
           
                }else{
                    $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
                }
               //$('#submitBtn').attr("disabled", false);
               // $('.modal-body').css('opacity', '');
            }
        });
    }
              
    
}
  
  
//-------------------------------USER LOgin Function----------------------------
  
  $(document).ready(function(){
 $('#Userlogin').click(function(){
  var emailID = $('#UseremailID').val();
  var pass = $('#Userpass').val();
  if($.trim(emailID).length > 0 && $.trim(pass).length > 0)
  {
   $.ajax({
    url:"mainheader.php",
    method:"POST",
    data:{emailID:emailID, pass:pass},
    cache:false,
    beforeSend:function(){

     $('#Userlogin').val("connecting...");
    },
    success:function(data)
    {
     if(data)
     {
      //$("body").load("VendorPanel/index.php").hide().fadeIn(1500);
      //header("location:VendorPanel/index.php");
       //window.location.replace("ViewDeals.php");
       //alert(alert);
       //$('#userShow').html(data);
      /* $("#modalLUSERForm .close").click()
       $('#modalLUSERForm').modal('toggle');*/
       $(".load-container").load("/ViewDeals.php");
     }
     else
     {
      var options = {
       distance: '40',
       direction:'left',
       times:'3'
      }
      $("#boxUser").effect("shake", options, 800);
      $('#Userlogin').val("Login");
      $('#Usererror').html("<span class='text-danger'>Invalid username or Password</span>");
     }
    }
   });
  }
  else
  {

  }
 });
});


</script>



