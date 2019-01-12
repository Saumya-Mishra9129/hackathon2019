 	

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
			<span class=""><a href="./index.php">Home</a>/Requests</span>
		</div>
		<div class="row card black-text border">
			<div class="black-text padding">
				<h2 class="heading">Requests</h2>
				<?php
					session_start();
					include "./DB/DbConnection.php";
								$query='SELECT request.rid,pFName,pLName,pSex,pBloodGroup
								FROM request,patient 
								WHERE request.pId=patient.pId
								AND unitsRecieved<units';
								
								$result = mysqli_query($connection,$query);
								if(mysqli_num_rows($result)>0){
									while ($row = mysqli_fetch_array($result)) {
										echo '<div class="align-row row-3">
											<div class="float-left col">'.$row['pFName'].' '.$row['pLName'].'</div>';
										echo '<div class="float-center col">'.$row['pSex'].'</div>';
										echo '<div class="float-right col"><span class="red-text">'.$row['pBloodGroup'].' </span><a href="./requestInfo.php?pass='.$row['rid'].'"><i class="fas fa-info-circle margin"></i></a></div></div>';
										echo "<br>";
									}
								}
								else{
									echo"No Requests at the moment.";
								}
							?>
				<div class="row">
				</div>
			</div>
		</div>
	</div>
</body>
<html>
