

<!doc\type html>
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
				<h2 class="heading">Place Request</h2>
				<div class="row">							
				<?php

				session_start();
				include "./DB/DbConnection.php";
					if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
						$_POST['date']=date("Y-m-d");
						$query='SELECT * FROM patient WHERE patient.pId="'.$_POST['pId'].'"';
						$result = mysqli_query($connection,$query);
						if(mysqli_num_rows($result)>0){
							while ($row = mysqli_fetch_array($result)) {
									if($row['pFName']==$_POST['pFname'] && $row['pLName']==$_POST['pLname']){
										if($row['pBloodGroup']==$_POST['pBloodGroup']){
											$sql='INSERT INTO request VALUES ("'.$_POST['rid'].'","'.$_POST['pId'].'","'.$_POST['date'].'","'.$_POST['units'].'")';
											echo "<br><br>";
											mysqli_query($connection,$sql);
											echo "<br><br>";
											if(!mysqli_error($connection)){
												echo"<div>Your request has been successfully placed.</div>";
												echo"<div>Your request no. is : ";
												echo $_POST['rid'];
												echo"</div>";
												echo"<div>Please note your Request Number for further references.</div>";
											}
											else{
												echo"Some error Occurred. Please check the input.";
											}
										}
										else echo "Blood Group doesn't matches";
									}
									else echo "Name entered doesn't matches with the donor's name";
								}
							}
						else{
							echo"Donor Identification No. doesn't exist";
						}
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
