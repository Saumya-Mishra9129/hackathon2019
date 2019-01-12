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
				<div class="row">
					<form action="actionOnRequest.php" method="post" class="align-column">

						<div class="align-row">
							<div class="col margin-auto">
								<input class="form-control form-text" type="text" type="text" name="rid" placeholder="Request Id" required>
							</div>
							<div class="col margin-auto">
								<input class="form-control form-text" type="text" name="pId" placeholder="Patient Id" required>
							</div>
						</div>

						<div class="align-row">
							<div class="col margin-auto">
								<input class="form-control form-text" type="text" name="pFname" placeholder="First Name" required>
							</div>
							<div class="col margin-auto">
								<input class="form-control form-text" type="text" name="pLname" placeholder="Last Name" required>

							</div>
						</div>

						<div class="align-row">
							<div class="col margin-auto">
								<input class="form-control form-text" type="text" name="units" placeholder="Units" required>
							</div>
							<div class=" col margin-auto">
								<select class="form-control form-text" name="pBloodGroup" required id="pBloodGroup" required>
										<option>Blood Group</option>
										<option value="A+">A+</option>
										<option value="A-">A-</option>
										<option value="B+">B+</option>
										<option value="B-">B-</option>
										<option value="AB+">AB+</option>
										<option value="AB-">AB-</option>
										<option value="O+">O+</option>
										<option value="O-">O-</option>
										</select>
							</div>
						</div>

						<div class="align-row">
							<div class="col-1 margin-auto">
								<input class="red-button" type="submit" value="Submit">
							</div>
						</div>
					</form>
				</div>
				<div>
					Haven't Registered Yet? <a href="insertPatient.html">Register Here</a> 
				</div>
				<div style="text-align: right;">*T&C apply</div>
			</div>
		</div>
	</div>
</body>
<html>
