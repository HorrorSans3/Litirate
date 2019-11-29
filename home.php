<?php 
	session_start();
	include_once ('config.php');
	$title = "Home";
	include_once ('header.php');
	if(!isset($_SESSION['user'])){
		header("location:index.php");
	}
	$conn = new mysqli($host, $username, $password, $mydatabase);
	$sql = "SELECT id, firstname, lastname FROM writers";
	$result = $conn->query($sql);
 ?>
<center><h1 id="welcome">Welcome </h1>
<p></p>
</center>




 <?php include_once ('footer.php'); ?>