<?php
	session_start();
?>
<!doctype html>
<html lang="en">

<head>
	<title>Please Login Here</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="index.css">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

	<!--Font FontAwesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	<!-- icon-->
	<link rel="icon" type="image/png" sizes="96x96" href="../logo.png">

</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
		<?php
						if(isset($_SESSION['success'])){
							echo "";
						}
					?>
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">

						<div class="content">
							<div class="header">
								<div class="head-img text-center">
									<center><img class="head-img" src="../pic.png"></center>
								</div>
								<p class="lead">Login to your account</p>
							</div>
							<form class="form-auth-small" action="login.php" method="POST">
								<div class="form-group">
									<label for="signin-email" class=" sr-only">Email</label>
									<input type="text" class="form-control" name="username" id="username" placeholder="Username">
								</div>
								<div class="form-group">
									<label for="signin-password" class=" sr-only">Password</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Password">
								</div>
								<div class="form-group"	>
									<label class="element-left">
										<input type="checkbox" class="chek">
										<span>Remember me</span>
									</label>
								</div>
								<button type="submit" class="btn">LOGIN</button>
							</form>
							<div class="bottom">
								<span><i class="fa fa-lock"></i> <a href="register.php">Not A Member? </a></span>
							</div>
						</div>
					</div>
					<div class="right vertical-align-wrap-1">
						<div class="content-right vertical-align-middle">
							<h1 class="heading">WELCOME TO UPKAAR</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>
