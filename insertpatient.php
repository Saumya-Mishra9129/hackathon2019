

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
			<span class=""><a href="./index.php">Home</a>/Check Request</span>
		</div>
		<div class="row card black-text border">
			<div class="black-text padding">
				<h2 class="heading">Registration</h2>
				<div class="row padding">
				<?php
					session_start();
					include "./DB/DbConnection.php";
					include "inc.php";
						if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

						$pid=generateId("pid");
						$vid=generateId("vid");
						$date=date("Y-m-d");
						$_POST['date']=date("Y-m-d");

							$sql='INSERT INTO patient VALUES ("'.$pid.'","'.$_POST['pFNAME'].'","'.$_POST['PLNAME'].'","'.$_POST['pSEX'].'", '.$_POST['pAge'].', "'.$_POST['pAddress'].'", '.$_POST['pPhoneNo'].',"'.$_POST['pBloodGroup'].'",'.$_POST['p_pincode'].',"'.$_POST['p_city'].'") ';

							echo "<br><br>";
							mysqli_query($connection,$sql);
							if(!mysqli_error($connection)){
								echo"<div>";
								echo "Your request has been successfully placed.</div><div>";
								echo "Your Patient Identificaion No. is : ";
								echo $pid;
								echo"</div><div>";
								echo "</div>Please note your Patient Identificaion No. for further references.";
							}
							else	echo mysqli_error($connection);
						}
						else{
							header("location: index.php");
						}
				?>
				</div>
				<div style="text-align: right;">*T&C apply
				</div>
			</div>
		</div>
	</div>
</body>
<html>

