<?php  

	session_start();
	include_once ('config.php');
	$title = "Login";
	$unerr = "username";
	$perr = "password";
	$result = "";
	include_once ('header.php');


if (isset($_SESSION['user'])){
    header("location:home.php");
}

else if(isset($_POST['login'])){

$username = $_POST['username'];
$password = $_POST['password'];
	if(empty($username)){
	$unerr = "Empty";
	}
	if (empty($password)) {
	$perr = "Empty";
	}
	else{
	$sql = "select * from litirate.writers where username = :pusername AND password = :ppassword";
	$query = $conn -> prepare($sql);
	$query -> bindParam(':pusername', $username);
	$query -> bindParam(':ppassword', $password);
	$query -> execute();
	}
	$result = $query->rowCount();
	if ($result > 0){
    $_SESSION['user'] = "ok";
    header("location:home.php");
}
}






?>
<input type="button" value="BACK" onclick="back()" name="" id="backbutton"><center>
<h1 id="logtitle">Login</h1></center>

<form action="login.php" method="POST">
	<br><br>
	<label id="loginusername">Username:  </label><input type="text" name="username" id="logininput" placeholder="<?php echo $unerr; ?>"><br><br>
	<label id="loginusername">Password:  </label><input type="Password" name="password" id="logininput" placeholder="<?php echo $perr; ?>"><br><br><br>
	<center><input type="submit" name="login" value="Log In" id="signbut"></center>

</form>

<script type="text/javascript" src="js/scripts.js"></script>
<?php include_once ('footer.php'); ?>