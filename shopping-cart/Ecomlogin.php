<?php
include 'config.php';

session_start();
error_reporting(0);
if(isset($_SESSION['username']))
{
	header('Location:Ecomphp.php');
}
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$password=md5($_POST['password']);

	$sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result=mysqli_query($conn,$sql);
	if($result->num_rows>0)
	{
		$row=mysqli_fetch_assoc($result);
		$_SESSION['username']=$row['username'];
		header('Location:Ecomphp.php');

	}
	else{
		echo"<script>alert('Oops!Email or password is wrong.')</script>";
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ecommerce Login Page</title>
	<script src="https://kit.fontawesome.com/e4780a578d.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="Ecomlogin.css">

</head>
<body>
	<div class="container">
		<!-- <p class="login-text">Login with social Media</p>
		<div class="login-social">
			<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
			<a href="#" class="twitter"><i class="fa  fa-twitter"></i></a>
			<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
			<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
		</div> -->
		
		<form method="" action="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;" >Login </p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" 
				value="<?php echo $_POST['password']; ?> "required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Dont't have an account?<a href="Ecomregister.php">Register Here</a>.</p>
		</form>
	</div>

</body>
</html>