<?php include("header.php"); ?>


<!-- retrive data from database to update for a specific user -->

<?php 
	$id = isset($_GET['id'])?$_GET['id']:"";
	
 ?>
					<?php include("config.php"); ?>
					<?php
							$sql="SELECT * FROM result WHERE id = $id ";

							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row  = $result->fetch_assoc()) {
							        $id   = $row["id"];
							        $name 	= $row["name"];
							        $sid 	= $row["sid"];
							        $term    = $row["term"];
							        $bangla    = $row["bangla"];
							        $english    = $row["english"];
							        $math    = $row["math"];
							        $science    = $row["science"];
							        $ict    = $row["ict"];
									
							    }
							}
							
							$conn->close();

					?>
<!-- retrive data from database to update for a specific user end -->


<!--Updating into database -->
						<?php include("config.php"); ?>
						<?php 
						if (isset($_POST["submit"])) {

								$sql = "UPDATE result SET name = '" .$_POST["name"]. "', sid='" .$_POST["sid"]."', term='" .$_POST["term"]."', bangla='" .$_POST["bangla"]."' , english='" .$_POST["english"]."' , math='" .$_POST["math"]."' , science='" .$_POST["science"]."' , ict='" .$_POST["ict"]."' WHERE id = $id";
								if ($conn->query($sql)===TRUE) {
									echo "<script>alert('Successfully Updated Result!');</script>";
								} else {
									echo "<script>alert('Error Updating Result!');</script>";
									
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
						        <label class="col-md-4 control-label">Student ID:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="sid" placeholder="student ID" class="form-control" type="number" required="required" value="<?php echo $sid; ?>">
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
						           		<option value="Final">Final</option>
						           	</select>
						           </div>
						        </div>
     						 </div>
     						 
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Bangla:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="bangla" placeholder="Marks" class="form-control" type="text" value="<?php echo $bangla; ?>">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">English:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="english" placeholder="Marks" class="form-control" type="text" value="<?php echo $english; ?>">
						           </div>
						        </div>
     						 </div>
     					</div>




						<div class="col-md-4">
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Math:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="math" placeholder="Marks" class="form-control" type="text" value="<?php echo $math; ?>">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Science:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="science" placeholder="Marks" class="form-control" type="text" value="<?php echo $science; ?>">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">ICT:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="ict" placeholder="Marks" class="form-control" type="text" value="<?php echo $ict; ?>">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label"></label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="submit" placeholder="Address" class="form-control" type="submit" value="Update" style="background-color:#3739d580;;color:#fff;">
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


					
			</div>  <!-- col-md-9 -->
			<!-- Main Place work to be done -->
		</div> <!-- col-md-12 -->


		<?php include("footer.php"); ?>

