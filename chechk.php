<?php  
//check.php  
//$connect = mysqli_connect("localhost", "root", "", "testing"); 
include 'connection.php';
if(isset($_POST["user_name"]))
{
 $username = mysqli_real_escape_string($conn, $_POST["user_name"]);
 $query = "SELECT * FROM register WHERE email = '".$username."'";
 $result = mysqli_query($conn, $query);
 echo mysqli_num_rows($result);
}
?>