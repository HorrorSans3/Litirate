<?php 
	session_start();
	include_once ('config.php');
	$title = "Success";
	include_once ('header.php');
 ?>


<center><h1 id="succ">Success</h1>
<p id="thanks">Thank you for signing in to <p id="thankstitle"> Lit-I-Rate</p></p>
<button id="loginsucc" onclick="login()">Log In</button>
</center>





 <?php include_once ('footer.php'); ?>