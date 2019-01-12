<?php
	session_start();
	session_unset();
	session_destroy();
	echo "Logout Successfull <br>Redirecting To HomePage ";
	header( "refresh:0;url=./index.php" );
?>