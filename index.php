<?php  

	session_start();
	include_once ('config.php');
	$title = "Lit-I-Rate";
	include_once ('header.php');

?>
<div id="head">

<center>
	<h1 id="welcome">Welcome to</h1>
	<h1 id="title">Lit-I-Rate</h1>

</center>
<center>
<input id="login" type="button" name="" value="Log In" onclick="login()">
<input id="signin" type="button" name="" value="Sign Up" onclick="sign()"> </center>

</div>

<?php include_once ('footer.php'); ?>