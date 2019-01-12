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
	echo'</div><div class="row text-center">
					<h1 class="heading"><a href="dashboard.php"><i class="fas fa-home"></i></a>
					</h1>
					</div><div class="row"><div class="card"><div class="card-header">';
					echo'<br><br>';
		if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
		
				include 'inc.php';
				
				$date=date("Y-m-d");
				$existence = 'SELECT * FROM patient WHERE pId = "'.$_POST['pId'].'" ';
				$result1 =	mysqli_query($connection,$existence);

				if(mysqli_num_rows($result1)>0){
				$patientBG = 'SELECT pBloodGroup FROM patient WHERE pid = "'.$_POST['pId'].'" ';
				$check = 'SELECT B.bId FROM availability A, donor D, blood B WHERE A.bId = B.bId AND B.dId = D.dId AND D.DBloodGroup =( '.$patientBG.' )';
				$result = mysqli_query($connection,$check);
				if(mysqli_num_rows($result)>0){
					$row = mysqli_fetch_array($result);
						$bId = $row['bId'];
					
				
					$sql='INSERT INTO infusion_history VALUES("'.$bId.'","'.$_POST['pId'].'","'.$date.'")';
					mysqli_query($connection,$sql);
					if(!mysqli_error($connection)){
						echo'<h1 class="heading">Success</h1>';
					}
					else{
						echo'<h1 class="heading">OOPS!</h1>';
					}
					
					if(!mysqli_error($connection)){
						echo"Patient has received the Blood ";	
					}	
					else{
						echo"There was an error while infusing the Blood. Do check the credentials or try again later.";
						}
				}
				else{
					echo "There is no Blood Group available for the requested type";
				}

			}
				else{
					echo "The entered ID does not exist in the Patient's Record";
				}
			}
			?>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
