<?php 
session_start();
include 'header.php';
include 'headbarSignup.php';
include 'connect.php';
$passErr = "";
$nameErr = "";
$mailErr = "";
$valid = false;
if($_SERVER['REQUEST_METHOD'] == "POST"){
	if(!($_POST['password1'] == $_POST['password2'])){
		global $passErr;
	$passErr = "Passwords do not match";
	$valid = false;
}
else if(strlen($_POST['password1']) < 6 ){
	global $passErr;
	$passErr = "Password should have atleast 6 characters";
	$valid = false;
}
else{
	$password = $_POST['password1'];
	$valid = true;
}
$username = test_input($_POST['username']);
$query = "SELECT u_name FROM user_info WHERE u_name = '$username'";
$result = mysqli_query($connection,$query);
$count = mysqli_num_rows($result);
if($count == 0 && $valid){
	$valid = true;
}
else if(!($count == 0)){
	$valid = false;
	global $nameErr;
	$nameErr = "Username already taken";
}
$email = test_input($_POST['email']);
$query = "SELECT u_email FROM user_info WHERE u_email = '$email'";
$result = mysqli_query($connection,$query);
$count = mysqli_num_rows($result);
if($count == 0 && $valid){
	$valid = true;
	
}
else if(!($count == 0)){
	$valid = false;
	global $mainErr;
	$mailErr = "This Email is already registered";
}
if($valid){
	$query = "INSERT INTO user_info (u_name,u_email,u_pass)VALUES ('$username','$email','$password')";
	if(mysqli_query($connection,$query)){
		echo "Your registration was Successful!";
		$_SESSION['username'] = $username;
	}
	else{
		echo mysqli_error($connection);
	}
}
}
else{
	$passErr = "";
	$nameErr = "";
	$mailErr = "";
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
mysqli_close($connection);
?>
<?php if (!$valid){
	echo '

<body>

    <div class="container">

      <form class="form-signin" method = "POST">
        <h2 class="form-signin-heading">Sign Up!</h2>
		<label for="inputEmail" class="sr-only">User name</label>
        <input type="text" id="inputUname" name="username" class="form-control" placeholder="User Name" required autofocus>
		<span class="error" style="color:red">*'.$nameErr.' </span>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required >
		<span class="error" style="color:red">*'.$mailErr.' </span>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword1" name="password1" class="form-control" placeholder="Password" required>
		<span class="error" style="color:red">*'.$passErr.' </span>
		<label for="inputPassword" class="sr-only">confirm Password</label>
        <input type="password" id="inputPassword2" name="password2" class="form-control" placeholder="Confirm Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  </body>';
}
?>
  <script>
  
  </script>
</html>