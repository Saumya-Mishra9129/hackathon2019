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
			<h1 class="heading">Donation Portal</h1>
		</div>
		<div class="row text-center">
			<center><img class="head-img" src="pic.png"></center>
		</div>
		<div class="row">
			<span class=""><a href="./index.php">Home</a>/Login</span>
		</div>
		<div class="row card black-text border">
			<div class="black-text padding">
				<h2 class="heading">Login</h2>
				<div class="row">
					<form action="profile_view.php" method="post" class="align-column">

						<div class="align-row">
							<div class="col margin-auto">
								<input class="form-control form-text" type="text" type="text" name="fname" placeholder="Fname" required>
							</div>
							<div class="col margin-auto">
								<input class="form-control form-text" type="text" type="text" name="lname" placeholder="Lname" required>
							</div>
							
						</div>
						<div class="align-row">
							<div class="col margin-auto">
									<input class="form-control form-text" type="password" name="pwd" placeholder="Password" required>
							</div>	
						</div>
						<br>
						<br>

						
						<div class="align-row">
							<div class="col-1 margin-auto">
								<input class="red-button" type="submit" value="Submit" style="background-color: #12889B">
							</div>
						</div>
					</form>
				</div>
				<br>
				<br>
				<div>
					Haven't Registered Yet? <a href="register.html">Register Here</a> 
				</div>
				<div style="text-align: right;">*T&C apply</div>
			</div>
		</div>
	</div>
</body>
<html>
