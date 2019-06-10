<?php 
	session_start();  
?>
<?php 
if($_SESSION['admin'] == "" || $_SESSION['username'] == ""){
	header("location:index.php");
}
?>


<!-- retrive data from database to update for a specific user -->

<?php 
	$st_id = isset($_GET['st_id'])?$_GET['st_id']:"";
	
 ?>
					


					<!--Deleting from database -->
						<?php include("config.php"); ?>
						<?php 
							// if (isset($_POST["submit"])) {
								$sql = "DELETE FROM stupayment WHERE st_id = $st_id";
								if ($conn->query($sql)===TRUE) {
									echo "<script>location.replace('viewStdPayment.php');</script>";
								} else {
									echo "<script>alert('Error deleting Payment!');</script>";
									
								}
								$conn->close();

							// } 
							
						 ?>

					<!-- Deleting from database End-->



		
		
	