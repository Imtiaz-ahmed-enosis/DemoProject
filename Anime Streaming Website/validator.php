<?phpif(!($_POST['password1'] == $_POST['password2'])){
	$passErr = "Passwords do not match";
}
else if(strlen($_POST['password1']) < 6 ){
	$passErr = "Password should have atleast 6 characters";
}
else{
	$password1 = $_POST['password1'];
}
$username = test_input($_POST['username']);
$email = test_input($_POST['email']);
$password1 =$_POST['password1'];
?>