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
	$ns_id = isset($_GET['ns_id'])?$_GET['ns_id']:"";
	
 ?>
					


					<!--Deleting from database -->
						<?php include("config.php"); ?>
						<?php 
							// if (isset($_POST["submit"])) {
								$sql = "DELETE FROM stuff WHERE ns_id = $ns_id";
								if ($conn->query($sql)===TRUE) {
									echo "<script>location.replace('viewnStuff.php');</script>";
								} else {
									echo "<script>alert('Error deleting Teacher!');</script>";
									
								}
								$conn->close();

							// } 
							
						 ?>

					<!-- Deleting from database End-->



		
		
	