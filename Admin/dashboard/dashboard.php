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
  <a href="#registerDonor">
    <li>
     Register a Donor
  </li></a>
  <a href="#registerPatient">
    <li>
     Register a Pateint
  </li></a>
  <a href="#IssueBlood">
    <li>
     Issue Blood
  </li></a>
  <a href="#check">
    <li>
    Check Availability
  </li></a>
  <a href="#addInInventory">
    <li>
     Add in Inventory
  </li></a>
  <a href="#history">
    <li>
     Infusion History
  </li></a>
  </ul>
  
</nav>

<main id="main-doc">

  <div class="row" id="registerDonor">
    <div class="col">
      <h1>Register a Donor</h1>
      <?php
        include "insertdonor.html";
      ?>
    </div>
  </div>

  <br>
  <br>
  <hr>

  <div class="row" id="registerPatient">
    <div class="col">
      <h1>Register a Patient</h1>
      <?php
        include "insertPatient.html";
      ?>
    </div>
  </div>

  <br>
  <br>
  <hr>

  <div class="row" id="check">
    <div class="col">
      <h1>Check Availability</h1>
      <?php
        include "check.html";
      ?>
    </div>
  </div>

  <br>
  <br>
  <hr>

  <div class="row" id="IssueBlood">
    <div class="col">
      <h1>Issue Blood to Pateint</h1>
      <?php
        include "issue.html";
      ?>
    </div>
  </div>

  <br>
  <br>
  <hr>

  <div class="row" id="addInInventory">
    <div class="col">
      <h1>Blood Donation</h1>
      <?php
        include "addBlood.html";
      ?>
    </div>
  </div>

  <br>
  <br>
  <hr>

  <div class="row" id="history">
    <div class="col">
      <h1>Infusion History</h1>
      <?php
        include "history.php";
      ?>
    </div>
  </div>
	
</main>

</body>

</html>