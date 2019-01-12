<?php
$user = "root";
$password = "rootuser";
$host = "localhost";

//connection to the database
//$dbhandle = mysql_connect($hostname, $username, $password)
$connection = mysqli_connect('localhost', 'root', 'rootuser','BloodBank');
 //or die(mysql_error());

//select a database to work 
$db = "BloodBank";
$selected = mysqli_select_db($connection,"BloodBank") 
  or die(mysqli_error($selected));
?>


	