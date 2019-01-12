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
				<h2 class="heading">Check Request</h2>
				<?php
					session_start();
					include "./DB/DbConnection.php";
						if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
							$sql='SELECT * 
								FROM REQUEST,PATIENT
								WHERE REQUEST.pId=PATIENT.pId
								AND REQUEST.rid="'.$_POST['rid'].'"';
							echo "<br><br>";
							$result = mysqli_query($connection,$sql);
							$row = mysqli_fetch_array($result); 
								if($row['pFName']==$_POST['pFname'] && $row['pLName']==$_POST['pLname']){
									if($row['units']==$_POST['units'] && $row['pBloodGroup']==$_POST['pBloodGroup']){
										
										echo '<div class="align-row row-3">
										<div class="float-left col">'.$row['pFName'].' '.$row['pLName'].'</div>';
										echo '<div class="float-center col">'.$row['pSex'].'</div>';
										echo '<div class="float-right col"><span class="red-text">'.$row['pBloodGroup'].' </div></div>';
										echo '<div class="float-center col">You have recieved '.$row['unitsRecieved'].' units of blood till now.</div>';
										$remaining=$row['units']-$row['unitsRecieved'];
										echo '<div class="float-center col">You have yet to recieve '.$remaining.' units of blood.</div>';
										echo "<br>";
										echo"If you have recieved blood units from any volunteer, select the number of blood units recieved";
										echo'<form action="updateRequest.php" method="post" class="align-column">';
										echo'<select class="form-control form-text" name="runit" required id="runit" required>';
										echo"<option></option>";
										for($i=1;$i<=$row['units'];$i++){
											echo"<option>".$i."</option>";
										}
										echo" </select>";
										echo'<input hidden="hidden" type="text" name="rid" required value="'.$_POST['rid'].'">';
										echo'<input hidden="hidden" type="text" name="unitsRecieved" required value="'.$row['unitsRecieved'].'">';
										echo'<input class="red-button" type="submit" value="Submit">';
										echo "</form>";
										
										echo"";
										
										
									}
									else{
										echo"Input Doesn't matches with our records.";
									}
								}
								else{
										echo"Input Doesn't matches with our records.";
								}									
						}
						else{
							header("location: index.php");
						}
				?>
				<div style="text-align: right;">*T&C apply</div>
			</div>
		</div>
	</div>
</body>
<html>
