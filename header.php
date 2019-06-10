<?php 
	session_start();  
?>
<?php 
if($_SESSION['admin'] == "" || $_SESSION['username'] == ""){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>School Management System</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="js/script.js"></script>
</head>
<body>
	<div class="container background">
		
		<header style="">
			<nav>
				<a href="home.php"><img src="img/coverPic.jpg" alt="sgtc campus" title="Saidpur Government Teachnical School &amp; College(SGTC)" class="img-responsive" style="height: 230px;"></a>
			</nav>
		</header>