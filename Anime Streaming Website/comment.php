<?php
session_start();
include 'header.php';
include 'connect.php';
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
if(isset($_SESSION['username'])){
	include 'headbarUser.php';
}
else {
	include 'headbarGuest.php';
}
	$seriesNo = $_GET['s_index'];
    $episodeNo = $_GET['episode_no'];
	$username = $_SESSION['username'];
	$comment = test_input($_GET['commentbody']);
	$query = "InSERT INTO comments (s_index,u_name,episode_no,comment_data)VALUES ('$seriesNo','$username','$episodeNo','$comment')"; 
	if(mysqli_query($connection,$query)){
		echo "Thank you for commenting.";
		
	}
	else{
		echo "error";
	}
	
?>