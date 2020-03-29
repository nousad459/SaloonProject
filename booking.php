<?php
  error_reporting(E_ALL & ~ E_NOTICE);
	include 'bootstap.php';
  include 'connection.php';
  if(isset($_POST['submit']))
  {


  /*echo*/	$date = $_POST['date'];

        $email = $_POST['email'];

      $time = $_POST['time'];

/*echo "  <br>     " .*/ $time1 = date('g:i A', strtotime($time));


  $query = "SELECT * FROM `shop_info` WHERE `email` = '$email'";
  $result = mysqli_query($conn , $query);
 
 }

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
      
			<div class="col-6 pt-1">
				
         
		
			</div>

         
         
			<div class="col-4 ">
       
        <div id="userShow"></div>

				
		</div>
		</div>
		
	</div>

	<!---------------------------------------------------->

  <div class="text-center pt-5">
    <h1>Your booking </h1>
  </div>


	<div class="container pt-2">

    <div class="row">
      <div class="col-md-7">


       <div class="card bg-White shadow pl-5">
         <h2>User Details </h2>
         <div class="row">
           <div class="col-sm-3">
           <strong>Mobile Number</strong> 
         </div>
         <div class="col-sm-4">
           <input type="text" class="form-control" name="mobile" id="mobile" maxlength="10" placeholder="Enter Mobile">
         </div>
         <div class="col-sm-3">
           
            <input type="button" name="" class="btn btn-success" value="Send OTP" onclick="CheckMobile()">
         </div>
         </div>
<br>
         <div class="row">
           <div class="col-sm-3">
           <strong>Enter OTP</strong> 
         </div>
         <div class="col-sm-3">
           <input type="text" class="form-control" name="mobileOtp" id="mobileOtp" maxlength="6" placeholder="Enter OTP" disabled="disabled">
         </div>
         <div class="col-sm-3">
           
    <input type="button" name="" id="Verify" class="btn btn-success" disabled="disabled"  value="Verify Number" onclick="VerifyOTP();">
         </div>


          <br>  <br>  <br>

         </div>

         <div class="row">
           <div class="col-6">
      <input type="button" id="BooK" disabled="disabled"  value="BooK Now" class="btn btn-success w-50" onclick="Booking();">
             <input type="button" name="" data-toggle="modal" data-target="#modalLUSERForm" value="Sign Up" class="btn btn-primary">
           </div>
           <div class="col-2">
               
           </div>
         </div>

         
       

         <br>  <br>  <br>
        
       </div>

      </div>

      <div class="col-md-5">
       <div class="card bg-White shadow pl-5 pr-5">
         
         <h2>Booking Summary</h2>

         <?php
      
            $qq = "SELECT * FROM `tbl_images` WHERE `email` = '$email'";

            $ress = mysqli_query($conn ,$qq);
            $data = mysqli_fetch_array($ress);  

         ?>
                <div class="row">
                  <div class="col-5">
                         <?php echo '
                                
                               
                         <img src="data:image/jpeg;base64,'.base64_encode($data['images'] ).'" class="img-thumbnail shadow" height="150" width="150" />

                               
                         ' ?>
                </div>

                 <?php while ($row = mysqli_fetch_array($result)): ?>

                <div class="col-6">
                 

                <h3><?= $row['shop_name'] ?></h3>
                <strong>Near <?= $row['landmarks'] ?></strong>
                          

                         
                </div>

                </div>

<hr>

         <div class="row">
           <div class="col-6">
             <strong>Service Date:</strong><br>
             <small class="pl-3"><?= $date ?></small>
           </div>

           <div class="col-6 pl-5">
             <strong>Service Time:</strong><br>
             <small class="pl-3"><?= $time1 ?></small>
           </div>
         </div>
        
<hr>

<div class="mt-0">
<h3 >Saloon Accessories</h3>
</div>

          <div class="row">
           <div class="col-7">
             <strong>Wifi:</strong>
             <small class="pl-3"><?= $row['wifi'] ?></small>
           </div>

           <div class="col-5 pl-5">
             <strong>No of Staff:</strong>
             <small class="pl-3"><?= $row['employee'] ?></small>
           </div>
         </div>
         <div class="row">
           <div class="col-7">
             <strong>Shop Time:</strong>
             <small class="pl-3"><?= $row['shop_time']." - ".$row['closetime']?></small>
           </div>

           <div class="col-5 pl-5">
             <strong>Experience:</strong>
             <small class="pl-3"><?= $row['employee'] ?></small>
           </div>


            <br>  <br>  <br>
         </div>

       </div>
      </div>


    </div>

 <?php endwhile; ?>
		

	</div>
<input type="hidden" id="hiddenEmail" value="<?= $email ?>">

<input type="hidden" id="hiddenDate" value="<?= $date ?>">
<input type="hidden" id="hiddenTime" value="<?= $time1 ?>">
</body>
</html>


<!-------------------------------user modal---------------------->



<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLUSERForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

  <div class="modal-dialog cascading-modal p" role="document">

    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">
        <div class="pl-5"> <h3>User Registration</h3></div>
        <hr>

     
        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
         
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel10" role="tab"><i class="fas fa-user-plus mr-1"></i>
              Register</a>
          </li>
           <li class="nav-item">
            <a class="nav-link " data-toggle="tab" href="#panel9" role="tab"><i class="fas fa-user mr-1"></i>
              Login</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade " id="panel9" role="tabpanel">

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
          <div class="tab-pane fade in show active" id="panel10" role="tabpanel">

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
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" maxlength="10"  placeholder="Enter your phone"/>
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
	//-------------------------------USER Verify Function----------------------------
  
  function CheckMobile()
  {

        var number = $('#mobile').val();
      if(number.length == 10 && number != null)
      {
        var input =  {
                          "mobile_number" : number,
                           "action" : "send_otp"
                     };
           $.ajax({

                  url : 'mainheader.php',
                  type : 'post',
                  data : input,
                  success : function(data)
                  {
                     if(data == 1)
                     {
                       alert("OPT send your Number");
                       $('#Verify').attr("disabled", false);
                       $('#mobileOtp').attr("disabled", false);
                        $("#mobile").attr('readonly','readonly');

                     }
                     else
                     {
                         alert("Wrong Number");

                          $('#Verify').prop("disabled", true);
                          $('#mobileOtp').prop("disabled", true);
                     }
                  }

           });          
      }
      else
      {
        alert("Plz Enter valid phone number");
      }
    }
 
 //---------------------------------Verfy Number--------------------------------------

 function VerifyOTP()
   {
      var otp = $('#mobileOtp').val();
     
        var input =  {
                          "otp" : otp,
                           "action" : "verify_otp"
                     };

 if(otp.length == 6 && otp != null)
 {


           $.ajax ({

                  url : 'mainheader.php',
                  type : 'post',
                  dataType : "json",
                  data : input,
                  success : function(data)
                  {
                     alert(data.message);
                     $('#BooK').attr("disabled", false);
                  },
                  error : function()
                  {
                    $('#BooK').prop("disabled", true);
                    alert("ss");
                  }

           });          
}
      else
      {
        alert("Plz Enter valid OTP number");
      }
        
   }


 //------------------------------user REgistration---------------------------
  
  

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
    var phone = $('#phone').val();
    var password = $('#passuser').val();
    var C_pass = $('#C_passuser').val();
    if(email.trim() == '' ){
        alert('Please enter your email.');
        $('#email').focus();
        return false;
    }else if(phone.trim() == '' ){
        alert('Please enter your mobile number.');
        $('#password').focus();
        return false;
    }else if(phone.length < 10  ){
        alert('Please enter valid mobile number.');
        $('#password').focus();
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
            data:'contactFrmSubmit=1&email='+email+'&phone='+phone+'&password='+password,
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



  ///----------------------------------------------------------------




  function Booking()
  {

        var mobile = $('#mobile').val();
        var hiddenEmail = $('#hiddenEmail').val();
         var hiddenDate = $('#hiddenDate').val();
          var hiddenTime = $('#hiddenTime').val();

         $.ajax({
          url:"BookNow.php",
          method:"POST",
          data:{
                  mobile:mobile,
                  hiddenEmail:hiddenEmail,
                  hiddenDate:hiddenDate,
                  hiddenTime:hiddenTime,
         },
          
          success:function(data)
          {
             $('#mobile').val('');
             alert(data);
     

            /*if(data == 0)
            {
               alert("Number Not Registered..");
               $('#mobile').val('');
               $('#Verify').attr("disabled", true);
            }
            else
            {
                    alert(data);
               $('#mobile').val('');
               $('#Verify').prop("disabled", false);
            }*/
             
          }
         });
    }

</script>