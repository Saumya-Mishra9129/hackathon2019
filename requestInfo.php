<!doctype html>
<html lang="en">

<head>
	<title>Welcome To Fill Red</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="./css/index.css">
	<link rel="stylesheet" href="./css/extra.css">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

	<!--Font FontAwesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	<!-- icon-->
	<link rel="icon" type="image/png" sizes="96x96" href="./logo.png">

</head>

<body>
	<div class="container">
		<div class="row text-center">
			<h1 class="heading">Welcome To Fill Red Organisation</h1>
		</div>
		<div class="row text-center">
			<center><img class="head-img" src="blood-bank.png"></center>
		</div>
		<div class="row">
			<span class=""><a href="./index.php">Home</a>/Request Detail</span>
		</div>
		<div class="row card black-text border">
			<div class="black-text padding">
				<h2 class="heading">Request Detail</h2>
				<?php
					session_start();
					include "./DB/DbConnection.php";
						if ($_SERVER['REQUEST_METHOD'] == 'GET') { 
							$query='SELECT * FROM patient,request WHERE request.rid="'.$_GET['pass'].'" AND request.pid=patient.pid';
							$result = mysqli_query($connection,$query);
							if(mysqli_num_rows($result)>0){
							while ($row = mysqli_fetch_array($result)) {
								
								echo '<div class="align-row row-3">
								<div class="float-left col"><b>Name: </b>'.$row['pFName'].' '.$row['pLName'].'</div>';
								echo '<div class="float-center col"><b>Sex</b>: '.$row['pSex'].'</div>';
								echo '<div class="float-right col"><span class="red-text"><b>Blood Group: </b>'.$row['pBloodGroup'].' </span></div>';
								echo '<div class="float-center col"><b>Units: </b>'.$row['units'].'</div>';
								echo '<div class="float-center col"><b>Phone No: </b>'.$row['pPhoneNo'].'</div>';
								echo'</div>';
							
								}
							}
							else{
								echo"No Donors Available at the mmoment.";
								}
							}
					?>
				<div class="row">
				</div>
			</div>
		</div>
	</div>
</body>
<html>
