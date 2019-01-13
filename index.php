<?php
	session_start();
	include "./DB/DbConnection.php";
?>
<!doctype html>
<html lang="en">

<head>
	<title>Welcome</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="./css/index.css">

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
			<h1 class="heading">UPKAAR</h1>
		</div>
		<div class="row text-center">
			<center><img class="head-img" src="pic.png"></center>
		</div>
		<div class="row">
			<div class="card">
				<div class="card-header">
					<ul>
						
						<li>
							<a href="sign in.php">Login</a>
						</li>
						<li>
							<a href="register.html">Sign Up</a>
						</li>
						<li>
							<a>Contact Us</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row red border" style="background-color: #12889B">
			<div class="content">
				<h2>Want to Contribute</h2>
				<div class="main-form">
					<form action="search.php" method="POST"><div class="col" ><span class="float-right" style="font-size: 20px;">Login:</span></div>
						<div class="col" style="margin-left: 20px" >
						   <div class="row-120" >
							<input  class="form-control form-text" type="text" type="text" name="fname" placeholder="Fname" required>
							<input class="form-control form-text" type="text" type="text" name="lname" placeholder="Lname" required>
							<input class="form-control form-text" type="password" name="pwd" placeholder="Password" required>
							</div>
						</div>
						<div class="col" style="margin-left: 60px"><input class="input" type="submit" value="Submit" ></div>
					</form>
					<div class="margin-60">
						<h4>*T&amp;C apply</h4>
					</div>
				</div>
			</div>
			<hr class="hr">
			<div class="text-left content align-row">
				<div class="col">
					<h2>No account?</h2>
				</div>
				<div class="col margin-4">
					<a href="registerVolunteer.html"><button class="red-button" onclick="" style="background-color: #12889B">Register Now</button></a>
				</div>
			</div>
		</div>
		<div class="row text-center padding">
			<div class="card center margin align-row">
				<div class="center align-row">
					<div class="margin">
						<i class="fas fa-thumbs-up fa-3x"></i><h4>Active Users</h4>
						<span class="highlight">
							<?php
								$query='SELECT count(*) as users FROM User';
								$result = mysqli_query($connection,$query);
								if(mysqli_num_rows($result)>0){
									while ($row = mysqli_fetch_array($result)) {
										echo $row['users']." ";
									}
								}
								else{
									echo"0 ";
								}
							?>
							</span>
					</div>
					<div class="margin">
						<i class="fas fa-hand-holding-heart fa-3x"></i><h4>Recent PickUp Requests</h4>
						<span class="highlight">
							<?php
								$query='SELECT count(*) as number_of_request FROM PickUpRequest';
								$result = mysqli_query($connection,$query);
								if(mysqli_num_rows($result)>0){
									while ($row = mysqli_fetch_array($result)) {
										echo $row['number_of_request']." ";
									}
								}
								else{
									echo"No Blood Requests at the moment.";
								}
							?>
						</span>
					</div>
					<div class="margin">
						<i class="fas fa-hand-holding-heart fa-3x"></i><h4>Order Numbers</h4>
						<span class="highlight">
						<?php
								$query='SELECT count(*) as number_of_active_donors FROM OrderRecord';
								$result = mysqli_query($connection,$query);
								if(mysqli_num_rows($result)>0){
									while ($row = mysqli_fetch_array($result)) {
										echo $row['number_of_active_donors']." ";
									}
								}
								else{
									echo"No Active Donors at the moment.";
								}
							?>
						</span>
					</div>
				</div>
			</div>
			<div class="align-row">
				<div class="card margin"> <h3>Pros of Donation</h3><hr>
					<ol ">
						<li class="margin-4">
							You get to play a major role in social welfare.
						</li><br>
						<li class="margin-4">
							You understand the importance of basic necessities when you caress someone else's.
						</li><br>
						<li class="margin-4">
							Your life becomes more sorted and rid of unused belongings.
						</li><br>
						<li class="margin-4">
							You embrace a new style of life when you ratify someone's happiness!
						</li><br>
						<li class="margin-4">
							There isn't any con!
						</li>
					</ol>
				</div>
				<div class="card margin">
					<h3><a href="Requests.php">The monthly Inventory Record</a></h3><hr>
					<div class="padding margin">
					<?php
								$query='SELECT sum(cloth) as cloth,sum(footwear) as footwear,sum(book) as books
								FROM OrderRecord';
								
								$result = mysqli_query($connection,$query);
								if(mysqli_num_rows($result)>0){
									$i=0;
									while ((($row = mysqli_fetch_array($result))) && ($i<5)) {
										echo '<div class="align-row row-3">';
											echo'<div class="float-left col">Cloth  '.$row['cloth'].'</div>';
											echo '<br>';
										echo '<div class="float-center col">FootWear  '.$row['footwear'].'</div>';
																					echo '<br>';

										echo '<div class="float-right col">Books  '.$row['books'].'</i></a></div></div>';
																					echo '<br>';

										echo "<br>";
										$i=$i+1;
									}
								}
								else{
									echo"No Requests at the moment.";
								}
							?>
					</div>
				
				</div>
				
			</div>
		</div>
	</div>
</body>

</html>
