<?php include("header.php"); ?>
		
		
		<div class="col-md-12">

			<?php include("leftMenu.php"); ?> <!-- col-md-3 is here -->
			<!-- Main Place work to be done -->
			<div class="col-md-9 hstu">
					<h3 class="text-center">Search Result !</h3> 
						<form action="" method="post" enctype="multipart/form-data">

					<!-- Selecting from database -->
						<?php include("config.php"); ?>
						<?php 
						if (isset($_POST["search"])) {
								$key = $_POST["search"];
								$sql = "SELECT * FROM stupayment WHERE name like '%$key%' OR class like '%$key%' OR year like '%$key%' OR term like '%$key%' OR dates like '%$key%' ";
								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
									echo "<table border='2' align='center' class='table table-hover'>
												<tr>
													<th>SL</th>
													<th>Name</th>
													<th>Class</th>
													<th>Term</th>
													<th>Year</th>
													<th>Amount</th>
													<th>Paid</th>
													<th>Due</th>
													<th>Date</th>
													<th>Update</th>
													<th>Delete</th>
												</tr>";
										while($row = $result->fetch_assoc()){
												echo "<tr>";
													echo "<td>".$row['st_id']."</td>";
													echo "<td>".$row['name']."</td>";
													echo "<td>".$row['class']."</td>";
													echo "<td>".$row['term']."</td>";
													echo "<td>".$row['year']."</td>";
													echo "<td>".$row['amount']."</td>";
													echo "<td>".$row['paid']."</td>";
													echo "<td>".$row['due']."</td>";
													echo "<td>".$row['dates']."</td>";
						?>

													<td><a href="updateStdPayment.php?st_id=<?php echo $row['st_id']?>">Update</a></td>
													<td><a href="deleteStdPayment.php?st_id=<?php echo $row['st_id']?>">Delete</a></td>

						<?php
												echo "</tr>";
										}
									echo "</table>";
								} else {
									echo("No Data were Found!");
								}
								
								$conn->close();

						}
							
						 ?>

					<!-- Selecting from database  End-->

					
					</form>

					<form action="searchStdPayment.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
						        
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           <a href="entryStdPayment.php"><input name="addnew" class="form-control" type="button" value="Add New" style="width:110px;"></a>
						           </div>
						        </div>
     					</div>
     					<div class="form-group">
						        
						        <div class="inputGroupContainer">
						          <div class="input-group">
						           	<input name="search" placeholder="Search Here" class="form-control" type="text" style="width: 180px;"></a> &nbsp;&nbsp;
						           	<button type="submit" style="width:100px;">Search</button>
						           </div>
						        </div>
						        
     					</div>
					</form>
			</div> <!-- col-md-9 -->
			<!-- Main Place work to be done end -->

					

		</div> <!-- col-md-12 -->
					
		
		<?php include("footer.php"); ?>

