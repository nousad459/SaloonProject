<?php
include 'bootstap.php';


//index.php
/*session_start();
if(isset($_SESSION["emailID"]))
{
 header("location:Login.php");
}*/

?>
<!DOCTYPE html>
<html>
<head>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	<!--------------------forshade---------------->
	 <script src="http://code.jquery.com/jquery-2.1.1.js"></script>
  <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!--------------------endd---------------->
  <style>  
	<title>Home</title>
	<style type="text/css">
		body{
			overflow-x: hidden;
		}
	  #box
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
	
	<style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

	</style>
	
	

</head>
<body class="p-0">

	<div class="container-fluid container-md shadow p-3" >
     <div class="row">
     	<div class="col-2 pl-5 pt-2 pb-3">
        <div class="pull-right">
     		<a href="">
			<img src="img/logo2.gif" style="max-width: 150px; height: 50px" alt="not support"> 
		     </a>
       </div>
		 </div>
     <div class="col-6"></div>
		 <div class="col-4 pt-3">
       <div class="pull-right">
		 <nav style="list-style: none;">
		   <li class="">
                        <a href="#" class="btn btn-primary" style="  text-decoration: none; font-weight:  bold; color: white" data-toggle="modal" data-target="#modalLUSERForm">UserLogin</a>
			            
                        <a href="#" class="btn btn-primary" style=" text-decoration: none; font-weight:  bold; color: white" data-toggle="modal" data-target="#modalLRForm">VendorLogin</a>

            </li>
			</nav>
</div>
		 </div>
		 
     </div>
		
	</div>
  
  <div class="container-fluid">
     <img src="footer_image.png" class="img-fluid">
  </div>
	<div class="container-fluid  h-50" style="background-color: #006699">

    <div class="container pt-5 mt-5 mr-3 text-center text-white ">Content </div>


	<div class="container pt-5 mt-5 mr-3  text-center">
			 
		<form method="post" action="Search1.php">
			
			<div class="col-md-8 pt-1  d-flex">
				
			<input type="text" name="search" class="form-control" style="min-height: 50px; ">
				
				<input type="submit" name="submit" value="Search" class="btn btn-success" style="width: 130px; font-weight: bold">
				   
			</div>
				
			
			
	
		</form>
	</div>
	
	</div>
	<div class="container-fluid p-5">
    <div class="text-center"><h1>Types Of Saloon</h1></div>
    <br>
		<div class="row">
			
			  <div class="col-md-2 ">
				 <div class="card shadow" >
        <img  src="img/11.jpg" class="card-img-top" alt="..." style="height: 210px">
        <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
         </div>

			</div>
      <div class="col-md-2 ">
         <div class="card shadow" >
        <img  src="img/22.png" class="card-img-top" alt="..." style="height: 210px">
        <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
         </div>

      </div>
      <div class="col-md-2 ">
         <div class="card shadow" >
        <img src="img/33.jpg" class="card-img-top" alt="..." style="height: 210px">
        <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
         </div>

      </div>
      <div class="col-md-2 ">
         <div class="card shadow" >
        <img src="img/44.jpg" class="card-img-top" alt="..." style="height: 210px">
        <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
         </div>

      </div>
      <div class="col-md-2 ">
         <div class="card shadow" >
        <img src="img/55.jpg" class="card-img-top" alt="..." style="height: 210px">
        <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
         </div>

      </div>
      <div class="col-md-2 ">
         <div class="card shadow" >
        <img src="img/66.jpg" class="card-img-top" alt="..." style="height: 210px">
        <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
         </div>

      </div>
			
		
		</div>
	
		
		
	
	
	</div>

  <div class="container-fluid p-2">

    <div class="text-center"><h1>Services</h1></div>
    <br>

    <div class="row">
      <div class="col-md-1 "></div>
        <div class="col-md-3 ">
         <div class="card shadow" >
        <img  src="img/11.jpg" class="card-img-top" alt="..." style="height: 210px">
        <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
         </div>

      </div>
      <div class="col-md-3 ">
         <div class="card shadow" >
        <img  src="img/22.png" class="card-img-top" alt="..." style="height: 210px">
        <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
         </div>

      </div>
      <div class="col-md-3 ">
         <div class="card shadow" >
        <img src="img/33.jpg" class="card-img-top" alt="..." style="height: 210px">
        <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
         </div>
       </div>

    <div class="col-md-1 "></div>
     </div>

  </div>

  <div class="container-fluid p-2">

    <div class="text-center"><h1>Cities We are Covered</h1></div>
    <br>
    <div class="row pl-5">
      <div class="col-md-2">fdds</div>
       <div class="col-md-2">fdds</div>
        <div class="col-md-2">fdds</div>
         <div class="col-md-2">fdds</div>
          <div class="col-md-2">fdds</div>
           <div class="col-md-2">fdds</div>
       </div>
        <br>
    <div class="row pl-5">
      <div class="col-md-2">fdds</div>
       <div class="col-md-2">fdds</div>
        <div class="col-md-2">fdds</div>
         <div class="col-md-2">fdds</div>
          <div class="col-md-2">fdds</div>
           <div class="col-md-2">fdds</div>
       </div>
  </div>

<br>
</body>
</html>

<?php
//include('includes/scripts.php');
include('footer.php');
?>





<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

  <div class="modal-dialog cascading-modal p" role="document">

    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">
        <div class="pl-5"> <h3>Vendor Login</h3></div>
        <hr>

     
        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
              Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
              Register</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

            <!--Body-->
            <div class="modal-body">
				<div id="box">
					<br>
				 <form method="post">
                    <div class="form-group">
                        <label for="emailID">Emai Id</label>
                        <input type="text" class="form-control" id="emailID" name="emailID" placeholder="Enter your email"/>
						 
                    </div>

               <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter your password"/>
                    </div>

              
                <div class="text-center">
				<input type="button" name="login" id="login" class="btn btn-primary" value="Login" />
				</div>
					 <div id="error"></div>
				</form>
					<br>
				</div>	
				
            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-center text-md-right mt-1">
                <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
              </div>
        <button type="button" class="btn btn-danger ml-auto"   data-dismiss="modal">Close</button>
            </div>

          </div>
          <!--/.Panel 7-->
			
<!------------------------------------------------------------------------------>
			
			
			

          <!--Panel 8-->
          <div class="tab-pane fade" id="panel8" role="tabpanel">

            <!--Body-->
            <div class="modal-body">
				 <p class="statusMsg"></p>
         <div id="box">
          <br>
				 <form role="form">
                    <div class="form-group">
                        <label for="email">Emai Id</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter your email"/>
						<span id="availability"></span>
                    </div>

               <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password"/>
                    </div>

               <div class="form-group">
                        <label for="C_pass">Confirm Password</label>
                        <input type="password" class="form-control" id="C_pass" placeholder="Enter your Confirm Password"/>
                    </div>

              
					
				</form>
        <br>
      </div>
      <br>
				<div class="text-center">
				<button type="button" id="" class="btn btn-primary submitBtn" onclick="submitContactForm()" >SUBMIT</button>
				</div>
				
				

            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-right">
                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
              </div>
              <button type="button" class="btn btn-danger ml-auto"  data-dismiss="modal">Close</button>
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
        <input type="button" name="Userlogin" id="Userlogin" class="btn btn-primary" value="Login" />
        </div>
           <div id="Usererror"></div>
        </form>
          <br>
        </div>  
        
            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-center text-md-right mt-1">
                <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
              </div>
        <button type="button" class="btn btn-danger ml-auto"   data-dismiss="modal">Close</button>
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
              <div class="options text-right">
                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
              </div>
              <button type="button" class="btn btn-danger ml-auto"   data-dismiss="modal">Close</button>
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





<script>

  //-----------------------------vendor check user------------------
	
	$(document).ready(function(){  
   $('#email').blur(function(){

     var email = $(this).val();

     $.ajax({
      url:'chechk.php',
      method:"POST",
      data:{user_name:email},
      success:function(data)
      {
       if(data != '0')
       {
        $('#availability').html('<span class="text-danger">This Email Id Already Registered.</span>');
        $('.submitBtn').attr("disabled", true);
       }
       else
       {
        $('#availability').html('<span class="text-success">You are new User.</span>');
        $('.submitBtn').attr("disabled", false);
       }
      }
     })

  });
 });  
	
  //--------------------------------------------vendor Registraion-------------------
	
	function submitContactForm(){
		
		var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var email = $('#email').val();
    var password = $('#password').val();
    var C_pass = $('#C_pass').val();
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
            url:'RegAction.php',
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

//-------------------------------Vendor LOgin Function----------------------------
	
	$(document).ready(function(){
 $('#login').click(function(){
  var emailID = $('#emailID').val();
  var pass = $('#pass').val();
  if($.trim(emailID).length > 0 && $.trim(pass).length > 0)
  {
   $.ajax({
    url:"loginAction.php",
    method:"POST",
    data:{emailID:emailID, pass:pass},
    cache:false,
    beforeSend:function(){
     $('#login').val("connecting...");
    },
    success:function(data)
    {
     if(data)
     {
      //$("body").load("VendorPanel/index.php").hide().fadeIn(1500);
      //header("location:VendorPanel/index.php");
      window.location.replace("VendorPanel/index.php");
     }
     else
     {
      var options = {
       distance: '40',
       direction:'left',
       times:'3'
      }
      $("#box").effect("shake", options, 800);
      $('#login').val("Login");
      $('#error').html("<span class='text-danger'>Invalid username or Password</span>");
     }
    }
   });
  }
  else
  {

  }
 });
});



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
    url:"UserLogin.php",
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
      window.location.replace("UserPanel/index.php");
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