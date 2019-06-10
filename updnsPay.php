<?php include("header.php"); ?>


<!-- retrive data from database to update for a specific user -->

<?php 
	$id = isset($_GET['id'])?$_GET['id']:"";
	
 ?>
					<?php include("config.php"); ?>
					<?php
							$sql="SELECT * FROM nspay WHERE id = $id ";

							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row  = $result->fetch_assoc()) {
							        $id   = $row["id"];
							        $name 	= $row["name"];
							        $nid 	= $row["nid"];
							        $salary    = $row["salary"];
							        $paid    = $row["paid"];
							        $due    = $row["due"];
							        $dates    = $row["dates"];
							        $total    = $row["total"];
							        
									
							    }
							}
							
							$conn->close();

					?>
<!-- retrive data from database to update for a specific user end -->


<!--Updating into database -->
						<?php include("config.php"); ?>
						<?php 
						if (isset($_POST["submit"])) {

								$sql = "UPDATE nspay SET name = '" .$_POST["name"]. "', nid='" .$_POST["nid"]."', salary='" .$_POST["salary"]."', paid='" .$_POST["paid"]."' , due='" .$_POST["due"]."' , dates='" .$_POST["dates"]."' , total='" .$_POST["total"]."'  WHERE id = $id";
								if ($conn->query($sql)===TRUE) {
									echo "<script>alert('Successfully Updated Payment!');</script>";
								} else {
									echo "<script>alert('Error Updating Payment!');</script>";
									
								}
								$conn->close();

							} 
							
						 ?>

					<!-- Updating into database End-->



		
		
		<div class="col-md-12">

			<?php include("leftMenu.php"); ?> <!-- col-md-3  -->
			<!-- Main Place work to be done -->
			<div class="col-md-9 hstu">
					<h3 class="text-center">Update NStuff Payment</h3> 
					<form class="well form-horizontal" action="" method="post" id="contact_form">
						<fieldset>

						<div class="col-md-5">
							<div class="form-group">
						        <label class="col-md-4 control-label">Name:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="name" placeholder="Full Name" class="form-control" type="text" required="required" value="<?php echo $name; ?>">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Teacher ID:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           <input name="nid" placeholder="Teacher ID" class="form-control" type="text" required="required" value="<?php echo $nid; ?>">
						           	</select>
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Salary:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="salary" placeholder="Salary" class="form-control" type="text" required="required" value="<?php echo $salary; ?>">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Amount Paid:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           <input name="paid" placeholder="Amount Paid" class="form-control" type="text" required="required" value="<?php echo $paid; ?>">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Due:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="due" placeholder="Due" class="form-control" type="text" value="<?php echo $due; ?>">
						           </div>
						        </div>
     						 </div>
     					</div>




						<div class="col-md-4">
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Date:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="dates" placeholder="Amount Paid" class="form-control" type="date" required="required" value="<?php echo $dates; ?>">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Total:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="total" placeholder="Total" class="form-control" type="text" value="<?php echo $total; ?>">
						           </div>
						        </div>
     						 </div>
     						 

     						 <div class="form-group">
						        <label class="col-md-4 control-label"></label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="submit" placeholder="" class="form-control" type="submit" value="Update Payment" style="background-color:#3739d580;;color:#fff;">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label"></label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<a href="nsPay.php"><input name="cancel" placeholder="Address" class="form-control" type="button" value="Cancel" style="background-color:#cf3f3f66;;color:#fff;"></a>
						           </div>
						        </div>
     						 </div>
     						 
     					</div>


						</fieldset>
					</form>


					
			</div>  <!-- col-md-9 -->
			<!-- Main Place work to be done -->
		</div> <!-- col-md-12 -->


		<?php include("footer.php"); ?>

