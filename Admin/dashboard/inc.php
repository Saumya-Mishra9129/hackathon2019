<?php
	
	function generateId($for) {
		$user = "root";
		$password = "";
		$host = "localhost";
		$connection = mysqli_connect('localhost', 'root', '','bloodbank');
 		$db = "bloodbank";
		$selected = mysqli_select_db($connection,"bloodbank") 
  			or die(mysqli_error($selected));
            $sql="SELECT ".$for." from inc";
            $result=mysqli_query($connection,$sql);

            $row=mysqli_fetch_assoc($result);

            $d=$row[$for];
            $num=$d;

            $num+=1;
           // echo $num."<br>";

            $sql="update inc set ".$for."='".$num."'";

            $result=mysqli_query($connection,$sql);

            //echo $num."<br>";
            return substr($for,0,1).$num;
         }
?>