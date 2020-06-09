<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="asset/css/admin.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container" id="container">
<div class="form-container sign-in-container">
	<form action="" method="POST">
		<h1>Sign In</h1>
		<br>
	<input type="text" name="username" placeholder="Username">
	<input type="password" name="password" placeholder="Password">
	<br>
	<button name="login">Sign In</button>
	<br>
	<button><a href="index.html" style="text-decoration:none;color:white;">Back</a></button>
	</form>
</div>
<div class="overlay-container">
	<div class="overlay">
		<div class="overlay-panel overlay-right">
		</div>
	</div>
</div>
</div>
</body>
</html>
<?php
if (isset($_POST['login'])) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	if ($username=="User123" && $password == "User456") {
		echo "<script>window.location='select.php?pesan=login'</script>";
		}else{
			echo "<script>window.alert('Data Salah')</script>";
		}
}
?>