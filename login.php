<?php  

	session_start();
	include_once ('config.php');
	$title = "Login";
	include_once ('header.php');

?>
<input type="button" value="BACK" onclick="back()" name="" id="backbutton"><center>
<h1 id="logtitle">Login</h1></center>

<form action="login.php" method="POST">
	<br><br>
	<label id="loginusername">Username:  </label><input type="text" name="username" id="logininput" placeholder="username"><br><br>
	<label id="loginusername">Password:  </label><input type="Password" name="password" id="logininput" placeholder="password">


</form>

<script type="text/javascript" src="js/scripts.js"></script>
<?php include_once ('footer.php'); ?>