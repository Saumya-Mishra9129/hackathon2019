<?php
	session_start();
	include "./DB/DbConnection.php";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
		$newValue=$_POST['unitsRecieved']+$_POST['runit'];
		$sql='UPDATE REQUEST SET unitsRecieved="'.$newValue.'" WHERE rid="'.$_POST['rid'].'"';
		mysqli_query($connection,$sql);
		if(mysqli_error($connection)){
			echo"SOME ERROR OCCURED TRY AGAIN";
		}
		else{
			header("refresh:2;url=index.php");
		}
	}
	else{
		header("refresh:2;url=index.php");
	}


?>