<?php

session_start();
include "./DB/DbConnection.php";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
		$query='SELECT * FROM DONOR WHERE DONOR.dId="'.$_POST['dId'].'"';
		$result = mysqli_query($connection,$query);
		$_POST['donationDate']=date("Y-m-d");
		if(mysqli_num_rows($result)>0){
			while ($row = mysqli_fetch_array($result)) {
					if($row['dFname']==$_POST['dFname'] && $row['dLname']==$_POST['dLname']){
						if($row['DBloodGroup']==$_POST['DBloodGroup']){
							$sql='INSERT INTO blood VALUES ("'.$_POST['bId'].'","'.$_POST['bType'].'","'.$_POST['donationDate'].'","'.$_POST['dId'].'")';
							echo $sql."<br><br>";
							mysqli_query($connection,$sql);
							echo "<br><br>";
							echo mysqli_error($connection);
						}
						else echo "Blood Group doesn't matches";
					}
					else echo "Name entered doesn't matches with the donor's name";
				}
			}
		else{
			echo"did doesn't exist";
		}
	}
?>
