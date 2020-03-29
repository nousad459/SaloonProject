<?php

 session_start();
//error_reporting(E_ALL & ~ E_NOTICE);
include 'textlocal.class.php';
//include 'connection.php';
class Controller
{
	function __construct(){
		$this -> processMobileVerification();
	}

	function processMobileVerification()
	{
		include 'connection.php';
		switch ($_POST['action']) {
			case 'send_otp':
				
                $mobile_number = $_POST['mobile_number'];

                $sql = "SELECT * FROM user_register WHERE phone = '$mobile_number' ";
				 $result = mysqli_query($conn, $sql);
				 $num_row = mysqli_num_rows($result);
				 if($num_row > 0)
				 {
				  
				   //echo "OTP Sned On Your Num..";

						$apiKey = urlencode('nkIev6IzndQ-jYAVv1riSaci2om93dqSu7i5NBOz3C');

		                $textlocal = new Textlocal(false , false , $apiKey);

		                $numbers = array($mobile_number);
		                $sender = 'TXTLCL';

		                $otp = rand(100000 , 999999);

		                $_SESSION['session_otp'] = $otp;

		                $message = "Your OTP is ".$otp;

		                try{
		                     $data = $textlocal -> sendSms($numbers, $message ,$sender);
		                    // require_once('veryfication.php');
		                     //exit();
	
		                     echo "1";
		                }catch(Exception $e){
		                	die('Error: '.$e->getMessage());
		                }



				 }
				 else
				 {
				 	echo "0";
				 }
                

				break;

				case "verify_otp":

				       $otp = $_POST['otp'];

				       if($otp == $_SESSION['session_otp']){

				       	   unset($_SESSION['session_otp']);
				       	   echo json_encode(array("type"=>"success", "message"=>"Your Mobile is verified!"));
				       }
				       else
				       {
				       	    echo json_encode(array("type"=>"error", "message"=>"Mobile verification failed!"));
				       }
				break;
		}
	}
}

$cnt = new Controller();
    
?>