<?php
session_start();

//check whether login successful or not if yes then start session 

$uFName=$_POST['fname'];
$uLname=$_POST['lname'];
$pwd=$_POST['pwd']
$link = mysqli_connect('localhost', 'hackathon', '12345','HackFest'); 
	//Check link to the mysql server 
	if(!$link){ 
	//die('Failed to connect to server: ' . mysql_error()); 
	} 
	//Select database 
	$db = mysqli_select_db($link,'HackFest'); 
	if(!$db){ 
	die("Unable to select database"); 
	} 
	//Create Insert query 
	$query = "Select uFname,uLname,uPassword from User where uFname='".$uFname."' AND uPassword='".$pwd."'";
	//Execute query 
	
	$results = mysqli_query($link,$query); 
	
	
 
	//Check if query executes successfully 
	if($results == FALSE) {
	//echo mysql_error(); 
	header("location:sign in.php");
die();
}
	else 
	{
	$userInfo=mysqli_fetch_array($results);
	if(($uFname==$userInfo['fname'])&&($uLname==$userInfo['lname'])){

$_SESSION['fname']=$_POST['fname'];
$_SESSION['isAuthenticated']=1;

header("location:profile_view.php");
}
	}
//else{
//else redirect to the login page

}
			

	//echo 'Thank You For Your FeedBack! ';}
	 


//--
?>