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
			<h1 class="heading">Donation Portal</h1>
		</div>
		<div class="row text-center">
			<center><img class="head-img" src="blood-bank.png"></center>
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
		<div class="row red border">
			<div class="content">
				<h2>Search Blood Donors</h2>
				<div class="main-form">
					<form action="search.php" method="POST"><div class="col"><span class="float-right" style="font-size: 20px;">Blood Group :</span></div>
						<div class="col">
							<select class="input" name="DBloodGroup" required id="DBloodGroup" required>
										<option></option>
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
						<div class="col margin-4"><input class="input" type="submit" value="Submit"></div>
					</form>
					<div class="margin-60">
						<h4>*T&amp;C apply</h4>
					</div>
				</div>
			</div>
			<hr class="hr">
			<div class="text-left content align-row">
				<div class="col">
					<h2>Want to become a Volunteer?</h2>
				</div>
				<div class="col margin-4">
					<a href="registerVolunteer.html"><button class="red-button" onclick="">Register Now</button></a>
				</div>
			</div>
		</div>
		<div class="row text-center padding">
			<div class="card center margin align-row">
				<div class="center align-row">
					<div class="margin">
						<i class="fas fa-thumbs-up fa-3x"></i><h4>Blood Donors</h4>
						<span class="highlight">
							<?php
								$query='SELECT count(donor.dId) as number_of_donors FROM donor';
								$result = mysqli_query($connection,$query);
								if(mysqli_num_rows($result)>0){
									while ($row = mysqli_fetch_array($result)) {
										echo $row['number_of_donors']." ";
									}
								}
								else{
									echo"0 ";
								}
							?></span>
					</div>
					<div class="margin">
						<i class="fas fa-hand-holding-heart fa-3x"></i><h4>Blood Requests</h4>
						<span class="highlight">
							<?php
								$query='SELECT count(*) as number_of_request FROM request';
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
						<i class="fas fa-hand-holding-heart fa-3x"></i><h4>Active Donors</h4>
						<span class="highlight">
						<?php
								$query='SELECT count(*) as number_of_active_donors FROM volunteer';
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
				<div class="card margin"> <h3>Blood Donate Tips</h3><hr>
					<ol ">
						<li class="margin-4">
							Eat and drink wisely
						</li><br>
						<li class="margin-4">
							Face your fears if you're scared of needles
						</li><br>
						<li class="margin-4">
							Come prepared
						</li><br>
						<li class="margin-4">
							Dress for success
						</li><br>
						<li class="margin-4">
							Take your time
						</li>
					</ol>
				</div>
				<div class="card margin">
					<h3><a href="Requests.php">Blood Requests</a></h3><hr>
					<div class="padding margin">
					<?php
								$query='SELECT request.rid,pFName,pLName,pSex,pBloodGroup
								FROM request,patient 
								WHERE request.pId=patient.pId
								AND unitsRecieved<units';
								
								$result = mysqli_query($connection,$query);
								if(mysqli_num_rows($result)>0){
									$i=0;
									while ((($row = mysqli_fetch_array($result))) && ($i<5)) {
										echo '<div class="align-row row-3">
											<div class="float-left col">'.$row['pFName'].' '.$row['pLName'].'</div>';
										echo '<div class="float-center col">'.$row['pSex'].'</div>';
										echo '<div class="float-right col"><span class="red-text">'.$row['pBloodGroup'].' </span><a href="./requestInfo.php?pass='.$row['rid'].'"><i class="fas fa-info-circle margin"></i></a></div></div>';
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
				<div class="card margin"> <h3>Available Blood</h3>
					<hr><br>

					<?php
								$query='SELECT D.DBloodGroup , count(*) as count
									FROM availability A, donor D, blood B
									WHERE A.bId = B.bId
									AND B.dId = D.dId
									GROUP BY D.DBloodGroup';
								
								$result = mysqli_query($connection,$query);
								if(mysqli_num_rows($result)>0){
									$i=0;
									while ((($row = mysqli_fetch_array($result))) && ($i<8)) {
										echo '<div class="align-row row-3">
											<div class="float-left col">'.$row['DBloodGroup'].'</div><div></div>';
										
										echo '<div class="float-right col"><span class="red-text">'.$row['count'].' </span></div></div>';
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
</body>

</html>
