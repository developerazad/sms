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
	$id = isset($_GET['id'])?$_GET['id']:"";
	
 ?>
					


					<!--Deleting from database -->
						<?php include("config.php"); ?>
						<?php 
							// if (isset($_POST["submit"])) {
								$sql = "DELETE FROM techpayment WHERE id = $id";
								if ($conn->query($sql)===TRUE) {
									echo "<script>location.replace('vtechPayment.php');</script>";
								} else {
									echo "<script>alert('Error deleting Payment!');</script>";
									
								}
								$conn->close();

							// } 
							
						 ?>

					<!-- Deleting from database End-->



		
		
	