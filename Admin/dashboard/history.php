<div class="card margin">
					<div class="padding margin">
					<?php
					include('../../DB/DbConnection.php');
								$query='SELECT *
								FROM infusion_history';

								echo '<div class="align-row row-3">
											<div class="float-left col">Blood ID </div>
											<div class="float-left col">Patient ID</div>';
										echo '<div class="float-center col">Date</div>
										</div><hr>';

								$result = mysqli_query($connection,$query);
								if(mysqli_num_rows($result)>0){
									$i=0;
									while ($row = mysqli_fetch_array($result)) {
										echo '<div class="align-row row-3">
											<div class="float-left col">'.$row['bId'].'</div>
											<div class="float-left col"> '.$row['pId'].'</div>';
										echo '<div class="float-center col">'.$row['date'].'</div></div>';
									}
								}
								else{
									echo"No History at the moment.";
								}
							?>
					</div>
				
				</div>