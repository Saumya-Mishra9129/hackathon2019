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
		echo'<h1 class="heading">Past Donations</h1>';
				echo'</div><div class="row text-center">
				<h1 class="heading"><a href="dashboard.php"><i class="fas fa-home"></i></a>
				</h1>
				</div><div class="row"><div class="card"><div class="card-header" style="margin-top:-5px;">';
				echo'<br><br>';
		if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
							$query='SELECT sum(cloth) as cloth,sum(footwear) as footwear,sum(book) as books
								FROM OrderRecord WHERE month(date) == $_POST['month'] AND year(date) == $_POST['year']';
								
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
					
				
						}
								
				else{
					echo"There are no resources available";
				}
			}
			?>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
