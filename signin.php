<?php  

	session_start();
	include_once ('config.php');
	$title = "Sign up";
	include_once ('header.php');
	$unerr = "username";
	$perr = "password";
	$aerr = "13~90";


if(isset($_POST['signin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    	if (!isset($_POST['gender'])) {
    	$gender = "Undetermined";
    	}
    	else{
    	$gender = $_POST['gender'];
		}
    $age = $_POST['age'];
    
    if (empty($username)) {
    	$unerr = "Empty username";
    }
    if (empty($password)) {
    	$perr = "Empty password";
    }
    
    if (empty($age)) {
    	$aerr = "Empty age";
    }
    else{
    $sql = "insert into litirate.writers ";
    $sql .= "(username, password, gender, age, date_joined) ";
    $sql .= "values (:pusername, :ppassword, :pgender, :page, NOW())";
    $query = $conn -> prepare($sql);
    $query -> bindParam(':pusername', $username);
    $query -> bindParam(':ppassword', $password);
    $query -> bindParam(':pgender', $gender);
    $query -> bindParam(':page', $age);
    $query ->execute();

    header("location:aftersign.php");

}
}
?>



<input type="button" value="BACK" onclick="back()" name="" id="backbutton"><center>
<h1 id="logtitle">Sign Up</h1></center>

<form action="signin.php" method="POST">
	<br><br>
	<label id="loginusername">Username:  </label><input type="text" name="username" id="logininput" placeholder="<?php echo $unerr; ?>"><br><br>
	<label id="loginusername">Password:  </label><input type="Password" name="password" id="logininput" placeholder="<?php echo $perr; ?>"><br><br>
	<label id="loginusername">Gender:  </label><input type="radio" id="genderinput" name="gender" value="Male" ><label id="genlabel">Male</label>
	<input type="radio" name="gender" value="Female"><label id="genlabel">Female</label>
	<br><br>
	<label id="loginusername">Age:  </label><input type="number" name="age" id="ageinput" placeholder="<?php echo $aerr; ?>" min="13" max="90"><br><br><center>
	<input type="submit" name="signin" value="Sign Up" id="signbut"></center>


</form>

<script type="text/javascript" src="js/scripts.js"></script>
<?php include_once ('footer.php'); ?>