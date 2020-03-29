<?php

include 'bootstap.php';

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

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
  </style>
</head>
<body style="background-color: #EBECED;" class="p-0">
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
                        <button type="submit" name="userLOg" class="btn btn-primary" style="  text-decoration: none; font-weight:  bold; color: white " data-toggle="modal" data-target="#modalLUSERForm">UserLogin</button>
			            
                        <a href="#" class="btn btn-primary" style=" text-decoration: none; font-weight:  bold; color: white" data-toggle="modal" data-target="#modalLRForm">VendorLogin</a>

            </li>
			</nav>
			</div>
		</div>
		</div>
		
	</div>

	<!---------------------------------------------------->


	<div class="container p-5 text-center">
		<div id="boxUser" class="bg-white p-5">


		
			<form method="post">
				
					
                    <div class="form-group">
                    	<div class="row pt-5">

                      <div class="col-2">  <label for="UseremailID">Emai Id</label></div>  
                       <div class="col-8"> <input type="text" class="form-control" id="UseremailID" name="UseremailID" placeholder="Enter your email"/></div>
                        
                    </div>
             </div>
               <div class="form-group">
               	<div class="row">
               		
                <div class="col-2">
                	<label for="Userpass">Password</label>
                </div>
                <div class="col-8">
                	<input type="password" class="form-control" id="Userpass" name="Userpass" placeholder="Enter your password"/>
                </div>

               	</div>

                        
                        

                    </div>

              
                <div class="text-center">
        <input type="button" name="Userlogin" id="Userlogin" class="btn btn-primary" value="Login"  />
        </div>
           
      
        </form>
		
<div id="Usererror"></div>
	</div>
	</div>

</body>
</html>



<script>
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
        //window.location.href = "ViewDeals.php";
        //window.location.assign("ViewDeals.php");
         $(".load-container").load("/ViewDeals.php");
         //window.history.pushState("data","Title","ViewDeals.php");

        // changeurl('ViewDeals','ViewDeals.php');
       /*$('#userShow').html(data);
       $("#modalLUSERForm .close").click()
       $('#modalLUSERForm').modal('toggle');*/


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