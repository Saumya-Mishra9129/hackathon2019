
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
//Connect to mysql server 
	$connection = mysqli_connect('localhost', 'hackathon', '12345','HackFest');

//Check link to the mysql server 
if(!$connection){ 
die('Failed to connect to server: ' . mysql_error()); 
} 
//Select database 
$db =mysqli_select_db($connection,"HackFest"); 
if(!$db){ 
die("Unable to select database"); 
} 
else{
		if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['submit']=="Submit") { 


			//include 'inc.php';
                    $fname=$_POST['uFname'];
                    $lname=$_POST['uLname'];
                    $uId=$_POST['uId'];

						//$did=generateId("did");
						//$date=date("Y-m-d");
						//$_POST['date']=date("Y-m-d");
				$sql='SELECT User.uFname,User.uLname,User.address,PickupRequest.oId,PickUpRequest.cloth,PickUpRequest.footwear,PickUpRequest.book,PickUpRequest.orderDate,PickUpRequest.pickupTime,PickUpRequest.pickupDate FROM User,PickUpRequest WHERE ($uId=PickUpRequest.uId and $uId=User.uId)';
				
				$result = mysqli_query($sql);
				echo '<h1>The User\'s Details are - </h1>';

 /*Draw the table for Players*/ 
                echo '<table border="1"> 

                   <th> First Name</th> 
                   <th> Last Name</th>
                   <th> Order Id </th> 
                   <th> Clothes</th> 
                   <th> FootWear</th> 
                   <th> Book</th> 
                   <th> Order Date</th> 
                   <th> pickupDate</th>
                   <th> pickupTime</th> ';

/*Show the rows in the fetched result set one by one*/ 

                while ($row = mysql_fetch_assoc($result))
                { 
                 echo '<tr> 

                 <td>'.$row['uFname'].'</td>
                 <td>'.$row['uLname'].'</td>
                 <td>'.$row['address'].'</td> 
                 <td>'.$row['oId'].'</td> 
                 <td>'.$row['cloth'].'</td> 
                 <td>'.$row['footwear'].'</td> 
                 <td>'.$row['book'].'</td> 
                 <td>'.$row['orderDate'].'</td> 
                 <td>'.$row['pickupTime'].'</td> 
                 <td>'.$row['pickupDate'].'</td>  
                 </tr>'; 
                }

                echo '</table>';
			}
			else 
               { 
                 include("searchUser.html"); 
                 echo "<center>Enter the customer name</ center>"; 
               }
 }              

			?>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
