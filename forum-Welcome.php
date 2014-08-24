<!DOCTYPE html>

<?php
session_start();
if(isset($_SESSION['user'])) {
echo "Welcome, " . htmlentities($_SESSION['user']);
} else {
echo "Unknown user";
die;
}
?>

<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="styles/forum-Welcome.css">	
		<title>Forum-Welkome</title>
	</head>
	
	<body>
		<header>
			<h1>
				<a href="#"><img src="img/logo.jpg" name="logo" alt="logo"/>FORUM.BG</a>
				<p>Welcome to Forum.BG</p>
			</h1>
			<form action="forum-Logout.php">
				<input type="submit" value="Logout">
			</form>				
		</header>
		<section>
			<div>
			
			</div>		
		</section>
		<footer>
			<address>Bulgaria Sofia 1510 tel:+359 0888123456</address>
			<form action="forum-Logout.php">
				<input type="submit" value="Logout">
			</form>
		</footer>
	</body>
</html>