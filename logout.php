<?php 
	session_start();
	session_destroy();
	include_once ('config.php');
	$title = "Success";
	include_once ('header.php');
 ?>


<center><h1 id="succ">Success</h1>
<p id="thanks">Thank you for using <p id="thankstitle"> Lit-I-Rate</p>See you soon</p>
<button id="loginsucc" onclick="back()">Home</button>
</center>





 <?php include_once ('footer.php'); ?>