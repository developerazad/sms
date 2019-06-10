<?php include("header.php"); ?>


<!-- retrive data from database to update for a specific user -->

<?php 
	$st_id = isset($_GET['st_id'])?$_GET['st_id']:"";
	
 ?>
					<?php include("config.php"); ?>
					<?php
							$sql="SELECT * FROM stupayment WHERE st_id = $st_id ";

							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row  = $result->fetch_assoc()) {
							        $st_id   = $row["st_id"];
							        $name 	= $row["name"];
							        $class 	= $row["class"];
							        $term    = $row["term"];
							        $year    = $row["year"];
							        $amount    = $row["amount"];
							        $paid    = $row["paid"];
							        $due    = $row["due"];
							        $dates    = $row["dates"];
									
							    }
							}
							
							$conn->close();

					?>
<!-- retrive data from database to update for a specific user end -->


<!--Updating into database -->
						<?php include("config.php"); ?>
						<?php 
						if (isset($_POST["submit"])) {

								$sql = "UPDATE stupayment SET name = '" .$_POST["name"]. "', class='" .$_POST["class"]."', term='" .$_POST["term"]."', year='" .$_POST["year"]."' , amount='" .$_POST["amount"]."' , paid='" .$_POST["paid"]."' , due='" .$_POST["due"]."' , dates='" .$_POST["dates"]."' WHERE st_id = $st_id";
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
					<h3 class="text-center">Update Faculty Form</h3> 
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
						        <label class="col-md-4 control-label">Class:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<select name="class" id="" required="required" value="<?php echo $class; ?>">
						           		<option value="">Select</option>				           		
						           		<option value="VI">VI</option>				           		
						           		<option value="VII">VII</option>				           		
						           		<option value="VIII">VIII</option>				           		
						           		<option value="IX">IX</option>				           		
						           		<option value="X">X</option>				           		
						           		
						           	</select>
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Term:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<select name="term" id="" required="required" value="<?php echo $term; ?>">
						           		<option value="">Select</option>				           		
						           		<option value="First">First</option>				           		
						           		<option value="Second">Second</option>				           		
						           		<option value="Test">Test</option>
						           		<option value="Final">Final</option>
						           	</select>
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Year:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<select name="year" id="" required="required" value="<?php echo $year; ?>">
						           		<option value="">Select</option>
						           		<option value="2017">2017</option>
						           		<option value="2018">2018</option>
						           		<option value="2019">2019</option>
						           	</select>
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Amount to Pay:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="amount" placeholder="Amount to Pay" class="form-control" type="text" value="<?php echo $amount; ?>">
						           </div>
						        </div>
     						 </div>
     					</div>




						<div class="col-md-4">
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
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Date:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="dates" placeholder="" class="form-control" type="date" value="<?php echo $dates; ?>">
						           </div>
						        </div>
     						 </div>

     						 <div class="form-group">
						        <label class="col-md-4 control-label"></label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="submit" placeholder="Address" class="form-control" type="submit" value="Add Payment" style="background-color:#3739d580;;color:#fff;">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label"></label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<a href="entryStudentPayment.php"><input name="cancel" placeholder="Address" class="form-control" type="button" value="Cancel" style="background-color:#cf3f3f66;;color:#fff;"></a>
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

