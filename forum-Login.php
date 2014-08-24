<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="styles/forum-Login.css">
		<title>Forum-Login.php</title>
	</head>
	
	<body>
		<header>
			<h1>
				<a href="#"><img src="img/logo.jpg" name="logo" alt="logo"/>FORUM.BG</a>
			</h1>
		</header>
		<section>
			<form method="post">
				<input type="text" name="user" placeholder="User-name">
				<input type="password" name="password" placeholder="Password">
				<input type="submit" value="Submit">
			</form>
		</section>

<?php
If(isset($_POST['user'])) {
$user = $_POST['user'];
$password = $_POST['password'];
//password must be verified 
	//if($user == 'abv' && $password == '123') {
	session_start();
	$_SESSION['user'] = $user;
	header("Location:forum-Welcome.php");
	//} else {
	//echo "Invalid user-name / password";
	//}
}
?>

		<footer>
			<address>Bulgaria Sofia 1510 tel:+359 0888123456</address>
		</footer>
	</body>
</html>