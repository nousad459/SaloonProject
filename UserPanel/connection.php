<?php

$conn = mysqli_connect("localhost","root","","saloon_system");

if(!$conn)
{
	die('Please check your Connection!!!' .mysql_error());
}

?>