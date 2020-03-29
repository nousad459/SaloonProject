<?php
//login.php
session_start();
include 'connection.php';
if(isset($_POST["emailID"]) && isset($_POST["pass"]))
{
 $emailID = mysqli_real_escape_string($conn, $_POST["emailID"]);
 $pass = mysqli_real_escape_string($conn, $_POST["pass"]);
 $sql = "SELECT * FROM user_register WHERE email = '".$emailID."' AND password = '".$pass."'";
 $result = mysqli_query($conn, $sql);
 $num_row = mysqli_num_rows($result);
 if($num_row > 0)
 {
  $data = mysqli_fetch_array($result);
  $_SESSION["emailID"] = $data["email"];
   echo $data["emailID"];


 }
}
?>