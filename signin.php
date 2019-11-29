<?php  

	session_start();
	include_once ('config.php');
	$title = "Sign up";
	include_once ('header.php');

?>
<input type="button" value="BACK" onclick="back()" name="" id="backbutton"><center>
<h1 id="logtitle">Sign Up</h1></center>

<form action="login.php" method="POST">
	<br><br>
	<label id="loginusername">Username:  </label><input type="text" name="username" id="logininput" placeholder="username"><br><br>
	<label id="loginusername">Password:  </label><input type="Password" name="password" id="logininput" placeholder="password"><br><br>
	<label id="loginusername">Gender:  </label><input type="radio" id="genderinput" name="gender" value="Male" ><label id="genlabel">Male</label>
	<input type="radio" name="gender" value="Female"><label id="genlabel">Female</label>
	<br><br>
	<label id="loginusername">Age:  </label><input type="number" name="age" id="ageinput" placeholder="13~90" min="13" max="90">


</form>

<script type="text/javascript" src="js/scripts.js"></script>
<?php include_once ('footer.php'); ?>