<?php include("header.php"); ?>
		
		
		<div class="col-md-12">

			<?php include("leftMenu.php"); ?> <!-- col-md-3  -->
			<!-- Main Place work to be done -->
			<div class="col-md-9 hstu">
					<h3 class="text-center">Non Stuff Registration Form</h3> 
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
						        <label class="col-md-4 control-label">Email:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="email" placeholder="Email" class="form-control" type="email" required="required">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Contact:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="contact" placeholder="Contact" class="form-control" type="text">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">DOB:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="dob" placeholder="Date Of Birth" class="form-control" type="date">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Address:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="address" placeholder="Address" class="form-control" type="text">
						           </div>
						        </div>
     						 </div>
     					</div>




						<div class="col-md-4">
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Degree:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<select name="degree" id="">
						           		<option value="PhD">PhD</option>
						           		<option value="Masters">Masters</option>
						           		<option value="Honours">Honours</option>
						           		<option value="HSC">HSC</option>
						           		
						           	</select>
						           </div>
						        </div>
     						 </div>

     						 <div class="form-group">
						        <label class="col-md-4 control-label">Gender:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<select name="gender" id="">
						           		<option value="">Select</option>
						           		<option value="Male">Male</option>
						           		<option value="Female">Female</option>
						           	</select>
						           </div>
						        </div>
     						 </div>

     						 <!-- <div class="form-group">
						        <label class="col-md-4 control-label">Married:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<select name="marry" id="">
						           		<option value="">Select</option>
						           		<option value="Yes">Yes</option>
						           		<option value="No">No</option>
						           	</select>
						           </div>
						        </div>
     						 </div> -->

     						 <div class="form-group">
						        <label class="col-md-4 control-label">Salary:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="salary" placeholder="Salary" class="form-control" type="text">
						           </div>
						        </div>
     						 </div>

     						 <div class="form-group">
						        <label class="col-md-4 control-label"></label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="submit" placeholder="Address" class="form-control" type="submit" value="Register" style="background-color:#3739d580;;color:#fff;">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label"></label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<a href="entryStudent.php"><input name="cancel" placeholder="Address" class="form-control" type="button" value="Cancel" style="background-color:#cf3f3f66;;color:#fff;"></a>
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

								$sql = "INSERT INTO stuff (name, email, contact, dob, address, degree, gender,  salary) VALUES('".$_POST["name"]."', '".$_POST["email"]."','".$_POST["contact"]."','".$_POST["dob"]."','".$_POST["address"]."','".$_POST["degree"]."','".$_POST["gender"]."','".$_POST["salary"]."')";
								if ($conn->query($sql)===TRUE) {
									echo "<script>alert('Successfully Registered');</script>";
								} else {
									echo "<script>alert('Error registering non stuff!');</script>";
									
								}
								$conn->close();

							} 
							
						 ?>

					<!-- inserting into database End-->
			</div>  <!-- col-md-9 -->
			<!-- Main Place work to be done -->
		</div> <!-- col-md-12 -->


		<?php include("footer.php"); ?>

