
<?php
  include('../../DB/DbConnection.php');
  session_start();

  if(!isset($_SESSION['username']) AND $_SESSION['member_id'] == ''){
    header('location:../login.php');
  }

?>

<!doctype html>
<html lang="en">

<head>
  <title>Welcome To Admin Dashboard</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
 
   <link rel="stylesheet" href="dashboard.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

  <link rel="icon" type="image/png" sizes="96x96" href="">
  
  
</head>

<body>
    <div class="container">
    <div class="row text-center">
	<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

			include 'inc.php';

						$did=generateId("did");
						$date=date("Y-m-d");
						$_POST['date']=date("Y-m-d");
				$sql='INSERT INTO donor VALUES ("'.$did.'","'.$_POST['dFname'].'","'.$_POST['dLname'].'", '.$_POST['dAge'].',"'.$_POST['DBloodGroup'].'", "'.$_POST['dSex'].'","'.$_POST['dAddress'].'","'.$_POST['dCity'].'", '.$_POST['dPincode'].', '.$_POST['dPhoneNo'].') ';
				mysqli_query($connection,$sql);
				if(!mysqli_error($connection)){
					echo'<h1 class="heading">Success</h1>';
				}
				else{
					echo'<h1 class="heading">OOPS!</h1>';
				}
      
				echo'</div><div class="row text-center">
				<h1 class="heading"><a href="dashboard.php"><i class="fas fa-home"></i></a>
				</h1>
				</div><div class="row"><div class="card"><div class="card-header">';
				echo'<br><br>';
				if(!mysqli_error($connection)){
					echo"Donor has been registered successfully";	
				}	
				else{
					echo"There was an error while registering the donor. Do check the credentials or try again later.";
				}
			}
			?>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
