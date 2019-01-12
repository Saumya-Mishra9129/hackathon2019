<?php
	include('connection.php');
	session_start();

	//if(!isset($_SESSION['username']) AND $_SESSION['member_id'] == ''){
	//	header('location:login.php');
	//}

?>

<!doctype html>
<html lang="en">

<head>
	<title>Welcome To Admin Dashboard</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


	<link rel="stylesheet" href="dashboard.css">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

	<link rel="icon" type="image/png" sizes="96x96" href="">

</head>

<body>
