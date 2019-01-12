<?php
session_start();
include "../DB/DbConnection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$usr=$_POST["username"];
$password=$_POST["password"];

$sql = 'SELECT * FROM admin WHERE userid="'.$usr.'"';

$result = mysqli_query($connection,$sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    	if($usr==$row["userid"]){
    		if($password==$row["password"]){
    			echo "Login Successful";
    			$_SESSION["logedin"]=1;
                $_SESSION["username"]=$usr;
                $_SESSION["password"]=$password;
                $_SESSION["active"]=1;
                $_SESSION['logged_in'] = true;
    			header( "refresh:0;url=./dashboard/dashboard.php" );
    		}else{
    			$_SESSION['error'] = "You have entered wrong password, try again!";
                header("refresh:1;url=message.php" );
    		}
    	}else{
            $_SESSION['error'] = "Credentials Wrong!";
            header("refresh:1;url=message.php" );

        }
    }
} else {
    $_SESSION['error'] = "User with that username doesn't exist!";
    header("refresh:1;url=message.php" );
}
}else{
    header("refresh:1;url=./index.php" );
}
?>
