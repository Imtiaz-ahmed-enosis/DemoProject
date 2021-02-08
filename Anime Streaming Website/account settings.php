<?php
session_start();
include 'header.php';

include 'connect.php';
$oldpassErr = "";
$newpassErr = "";
include 'login handler.php';
if(isset($_SESSION['username'])){
	include 'headbarUser.php';
$valid = false;
if($_SERVER['REQUEST_METHOD'] == "POST"){
	if(!($_POST['password2'] == $_POST['password3'])){
		global $newpassErr;
	$newpassErr = "*Passwords do not match";
	$valid = false;
}
else if(strlen($_POST['password2']) < 6 ){
	global $newpassErr;
	$newpassErr = "*Password should have atleast 6 characters";
	$valid = false;
}
else{
	$newpassword = $_POST['password2'];
	$valid = true;
}
$username = $_SESSION['username'];
$oldpassword = $_POST['password1'];
$query = "SELECT u_name FROM user_info WHERE u_name = '$username' and u_pass = '$oldpassword'";
$result = mysqli_query($connection,$query);
$count = mysqli_num_rows($result);
if($count == 0){
	$valid = false;
	global $oldpassErr;
	$oldpassErr = "*Incorrect password";
}
else if(!($count == 0) && $valid){
	$valid = true;
}
if($valid){
	$query = "UPDATE user_info SET u_pass = '$newpassword' WHERE u_name = '$username'";
	if(mysqli_query($connection,$query)){
		mysqli_close($connection);
		echo "<body style = 'background-color:cornsilk'>Your password has been changed</body>";
	}
	else{
		echo mysqli_error($connection);
	}
}
}

 if (!$valid){
	echo '
<div class="jumbotron" style= "margin-bottom:0px; padding-top:0px; padding-bottom:0px;">
      <div class="container">
	  <div class="row" >
		<div class = "col-md-4" align ="left" style="margin-top:54px;">
		<form class="form-signin" method = "POST">
        <h2 class="form-signin-heading">Account Settings</h2>
        <label for="oldPassword" class="sr-only">Current Password</label>
        <input type="password" id="oldPassword" name="password1" class="form-control" placeholder="Current Password" required>
		<span class="error" style="color:red">'.$oldpassErr.' </span>
		<label for="newPassword" class="sr-only">New Password</label>
        <input type="password" id="newPassword" name="password2" class="form-control" placeholder="New Password" required>
		<span class="error" style="color:red">'.$newpassErr.' </span>
		<label for="inputPassword" class="sr-only">confirm Password</label>
        <input type="password" id="inputPassword2" name="password3" class="form-control" placeholder="Confirm Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Done</button>
      </form>
      </div>
    </div>
	</div>
	</div>
	</html>';
 }
}
else{
	include 'headbarGuest.php';
	echo "Please log in to change account settings</html>";
}
	?>