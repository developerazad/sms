<?php include("header.php"); ?>
		
		
		<div class="col-md-12">

			<?php include("leftMenu.php"); ?> <!-- col-md-3  -->
			<!-- Main Place work to be done -->
			<div class="col-md-9 hstu">
					<h3 class="text-center">Non Stuff Payment Form</h3> 
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
						        <label class="col-md-4 control-label">Non Stuff ID:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           <input name="nid" placeholder="Teacher ID" class="form-control" type="text" required="required">
						           	</select>
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Salary:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="salary" placeholder="Salary" class="form-control" type="text" required="required">
						           </div>
						        </div>
     						 </div>
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
     					</div>




						<div class="col-md-4">
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Date:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="dates" placeholder="Amount Paid" class="form-control" type="date" required="required">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Total:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="total" placeholder="Total" class="form-control" type="text">
						           </div>
						        </div>
     						 </div>
     						 

     						 <div class="form-group">
						        <label class="col-md-4 control-label"></label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="submit" placeholder="" class="form-control" type="submit" value="Add Payment" style="background-color:#3739d580;;color:#fff;">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label"></label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<a href="techPayment.php"><input name="cancel" placeholder="Address" class="form-control" type="button" value="Cancel" style="background-color:#cf3f3f66;;color:#fff;"></a>
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


							$sql1 = "SELECT * FROM nspay WHERE nid='".$_POST["nid"]."' ";
								$result = $conn->query($sql1);
								if ($result->num_rows > 0) {
									echo "<script>alert('Sorry, Payment already recorded!');</script>";
								}else{
									$sql = "INSERT INTO nspay (name, nid, salary, paid, due, dates, total) VALUES('".$_POST["name"]."', '".$_POST["nid"]."','".$_POST["salary"]."','".$_POST["paid"]."','".$_POST["due"]."','".$_POST["dates"]."','".$_POST["total"]."')";
											if ($conn->query($sql)===TRUE) {
												echo "<script>alert('Successfully Payment Recorded!');</script>";
											} else {
												echo "Error Recording Payment!";
											}
											$conn->close();
								}

							} 
							
						 ?>

					<!-- inserting into database End-->
			</div>  <!-- col-md-9 -->
			<!-- Main Place work to be done -->
		</div> <!-- col-md-12 -->


		<?php include("footer.php"); ?>

