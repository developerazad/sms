<?php include("header.php"); ?>
		
		
		<div class="col-md-12">

			<?php include("leftMenu.php"); ?> <!-- col-md-3  -->
			<!-- Main Place work to be done -->
			<div class="col-md-9 hstu">
					<h3 class="text-center">Input Students Result</h3> 
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
						        <label class="col-md-4 control-label">ID No:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="sid" placeholder="student ID" class="form-control" type="number" required="required">
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
						           		<option value="Final">Final</option>
						           	</select>
						           </div>
						        </div>
     						 </div>
     						 
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Bangla:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="bangla" placeholder="Marks" class="form-control" type="text">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">English:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="english" placeholder="Marks" class="form-control" type="text">
						           </div>
						        </div>
     						 </div>
     					</div>




						<div class="col-md-4">
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Math:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="math" placeholder="Marks" class="form-control" type="text">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Science:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="science" placeholder="Marks" class="form-control" type="text">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">ICT:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="ict" placeholder="Marks" class="form-control" type="text">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label"></label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="submit" placeholder="Address" class="form-control" type="submit" value="Save" style="background-color:#3739d580;;color:#fff;">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label"></label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<a href="entryResult.php"><input name="cancel" placeholder="Address" class="form-control" type="button" value="Cancel" style="background-color:#cf3f3f66;;color:#fff;"></a>
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


							$sql1 = "SELECT * FROM result WHERE sid='".$_POST["sid"]."' ";
								$result = $conn->query($sql1);
								if ($result->num_rows > 0) {
									echo "<script>alert('Sorry, Marks already recorded!');</script>";
								}else{

									$sql = "INSERT INTO result (name, sid, term, bangla, english, math, science, ict) VALUES('".$_POST["name"]."', '".$_POST["sid"]."','".$_POST["term"]."','".$_POST["bangla"]."','".$_POST["english"]."','".$_POST["math"]."','".$_POST["science"]."','".$_POST["ict"]."')";
									if ($conn->query($sql)===TRUE) {
										echo "<script>alert('Successfully Recorded');</script>";
									} else {
										echo "Error recording ressult!";
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

