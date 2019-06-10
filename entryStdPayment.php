<?php include("header.php"); ?>
		
		
		<div class="col-md-12">

			<?php include("leftMenu.php"); ?> <!-- col-md-3  -->
			<!-- Main Place work to be done -->
			<div class="col-md-9 hstu">
					<h3 class="text-center">Student Payment Form</h3> 
					<form class="well form-horizontal" action=" " method="post" id="contact_form">
						<fieldset>

						<div class="col-md-5">
							<div class="form-group">
						        <label class="col-md-4 control-label">Name:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="name" placeholder="Full Name" class="form-control" type="text" required="required">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Class:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<select name="class" id="" required="required">>
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
						           	<select name="term" id="" required="required">>
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
						           	<select name="year" id="" required="required">>
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
						           	<input name="amount" placeholder="Amount to Pay" class="form-control" type="text">
						           </div>
						        </div>
     						 </div>
     					</div>




						<div class="col-md-4">
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Amount Paid:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="paid" placeholder="Amount Paid" class="form-control" type="text" required="required">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Due:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="due" placeholder="Due" class="form-control" type="text">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Date:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="dates" placeholder="" class="form-control" type="date">
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
						           	<a href="entryStdPayment.php"><input name="cancel" placeholder="Address" class="form-control" type="button" value="Cancel" style="background-color:#cf3f3f66;;color:#fff;"></a>
						           </div>
						        </div>
     						 </div>
     						 
     					</div>


						</fieldset>
					</form>


					<!-- inserting into database -->
						<?php include("config.php"); ?>
						<?php 
						if (isset($_POST["submit"])) {


							$sql = "INSERT INTO stupayment (name, class, term, year, amount, paid, due, dates) VALUES('".$_POST["name"]."', '".$_POST["class"]."','".$_POST["term"]."','".$_POST["year"]."','".$_POST["amount"]."','".$_POST["paid"]."','".$_POST["due"]."','".$_POST["dates"]."')";
									if ($conn->query($sql)===TRUE) {
										echo "<script>alert('Successfully Registered');</script>";
									} else {
										echo "There was an error registering student!";
									}
									$conn->close();
								

							} 
							
						 ?>

					<!-- inserting into database End-->
			</div>  <!-- col-md-9 -->
			<!-- Main Place work to be done -->
		</div> <!-- col-md-12 -->


		<?php include("footer.php"); ?>

