<?php 
	session_start();
	include_once ('config.php');
	$title = "Home";
	include_once ('header.php');
	if(!isset($_SESSION['user'])){
		header("location:index.php");
	}
	$result = $conn->query("SELECT * FROM litirate.writers ORDER BY ID DESC");
 ?>
<button id="backbutton" ><a href="logout.php">Log Out</a></button>


<center><h1 id="welcome">Welcome </h1>
<p></p>
</center>




 <?php include_once ('footer.php'); ?>