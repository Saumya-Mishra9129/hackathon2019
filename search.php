<?php
	session_start();
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
	<link rel="stylesheet" href="./css/extra.css">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

	<!--Font FontAwesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	<!-- icon-->
	<link rel="icon" type="image/png" sizes="96x96" href="./Logo.png">

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
			<span class=""><a href="./index.php">Home</a>/Available Users</span>
		</div>
		<div class="row card black-text border">
			<div class="black-text padding">
				<h2 class="heading">Available User</h2>

				<div class="align-row row-4">
					<div class="float-left col">First Name</div>
					<div class="float-center col">Last Name</div>
					<div class="float-center col">Address</div>
					<div class="float-center col">Contact Details</div>
					
				</div>
					<br>

				<?php
					echo"Not ";
					include "./DB/DbConnection.php";
						echo"Hewre";
						if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['submit']=="Submit" ) { 
							$query='SELECT uFname,uLname,address,uPhoneNo FROM  User WHERE $_POST['pwd']=uPassword AND $_POST['fname'] = uFname';
							$result = mysqli_query($connection,$query);
							if(mysqli_num_rows($result)>0){
								while ($row = mysqli_fetch_array($result)) {
									
									echo '<div class="align-row row-4">
									<div class="float-left col">'.$row['uFname'].' '.$row['uLname'].'</div>';
									echo '<div class="float-center col">'.$row['address'].'</div>';
									echo '<div class="float-right col"><span class="red-text">'.$row['uPhoneNo'].' </span><i class="fas fa-info-circle margin"></i></div></div>';
									echo "<br>";
									
								}
							}
						}
						else{
							echo"Not a registered member.";
							}
					?>
				<div class="row">
				</div>
			</div>
		</div>
	</div>
</body>
</html>
