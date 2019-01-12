<?php
$user = "hackathon";
$password = "12345";
$host = "localhost";

//connection to the database
//$dbhandle = mysql_connect($hostname, $username, $password)
$connection = mysqli_connect('localhost', 'hackathon', '12345','HackFest');
 //or die(mysql_error());

//select a database to work 
$db = "HackFest";
$selected = mysqli_select_db($connection,"HackFest") 
  or die(mysqli_error($selected));
?>


	