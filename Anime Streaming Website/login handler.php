<?php
$loginErr = "";
if($_SERVER['REQUEST_METHOD'] == "POST"){
	$username = test_input($_POST['username']);
	$password = $_POST['password'];
	$query = "SELECT u_name,u_pass FROM user_info WHERE u_name = '$username' and u_pass = '$password'";
	$result = mysqli_query($connection,$query);
	$count = mysqli_num_rows($result);
	if($count == 1){
		$_SESSION['username'] = $username;
	}
	else{
		global $loginErr;
		$loginErr = "Incorrect Username or Password";
	}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


if(isset($_SESSION['username']) && !(empty($_SESSION['username']))){
	include 'headbarUser.php';
}
else{
	include 'headbarGuest.php';
}
?>