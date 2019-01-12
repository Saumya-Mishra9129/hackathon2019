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

  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

  <link rel="icon" type="image/png" sizes="96x96" href="">

</head>

<body>
<nav id="navbar">
  
  <header id="main-heading"> <span>DashBoard</span></header><hr>
  	<?php 
      echo $_SESSION["username"]."<br><a href='../logout.php'>Logout</a>";
    ?>
  <ul>
  <a href="#searchUser">
    <li>
     Search a User
  </li></a>
  <a href="#totalUsers">
    <li>
     Total Users
  </li></a>
  <a href="#pastDonations">
    <li>
     Past Donations
  </li></a>
  <a href="#currentStatus">
    <li>
    Check Current Status
  </li></a>
  </ul>
  
</nav>

<main id="main-doc">

  <div class="row" id="searchUser">
    <div class="col">
      <h1>Search a User</h1>
      <?php
        include "searchUser.html";
      ?>
    </div>
  </div>

  <br>
  <br>
  <hr>

  <div class="row" id="totalUsers">
    <div class="col">
      <h1>Total Active Users</h1>
      <?php
        include "totalUsers.html";
      ?>
    </div>
  </div>

  <br>
  <br>
  <hr>

  <div class="row" id="pastDonations">
    <div class="col">
      <h1>Check Past Donations</h1>
      <?php
        include "pastDonations.html";
      ?>
    </div>
  </div>

  <br>
  <br>
  <hr>

  <div class="row" id="currentStatus">
    <div class="col">
      <h1>Current Pickup Requests</h1>
      <?php
        include "currentStatus.html";
      ?>
    </div>
  </div>

  <br>
  <br>
  <hr>
	
</main>

</body>

</html>