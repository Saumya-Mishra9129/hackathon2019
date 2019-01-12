<?php
	session_start();
?>
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
			<span class=""><a href="./index.php">Home</a>/Available Donor</span>
		</div>
		<div class="row card black-text border">
			<div class="black-text padding">
				<h2 class="heading">Available Donor</h2>

				<div class="align-row row-3">
					<div class="float-left col">Name</div>
					<div class="float-center col">Sex</div>
					<div class="float-right col">
					Blood Group
					</div>
				</div>
					<br>

				<?php
					include "./DB/DbConnection.php";
						if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
							$query='SELECT * FROM donor,volunteer WHERE donor.did=volunteer.did AND donor.DBloodGroup="'.$_POST['DBloodGroup'].'"';
							$result = mysqli_query($connection,$query);
							if(mysqli_num_rows($result)>0){
								while ($row = mysqli_fetch_array($result)) {
									
									echo '<div class="align-row row-3">
									<div class="float-left col">'.$row['dFname'].' '.$row['dLname'].'</div>';
									echo '<div class="float-center col">'.$row['dSex'].'</div>';
									echo '<div class="float-right col"><span class="red-text">'.$row['DBloodGroup'].' </span><i class="fas fa-info-circle margin"></i></div></div>';
									echo "<br>";
									
								}
							}
							else{
								echo"No Donors Available at the moment.";
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
