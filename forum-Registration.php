<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Team "Spike" - Forum-Registration</title>
		<link rel="stylesheet" href="styles/forum-Registration.css">
	</head>
	<body>
		<header>
			<h1>
				<a href="#"><img src="img/logo.jpg" name="logo" alt="logo"/>FORUM.BG</a>
				<p>Welcome to Forum.BG</p>
			</h1>
			<div id="back"><a href="index.php">back</a></div>
		</header>
		<section>
			<div id="section">
			<form action="" method="post">
				<input type="text" name="name" placeholder="User-Name" autofocus="autofocus"><br>
				<input type="password" placeholder="Password" required="required" name="password"><br>
				<input type="submit" value="Submit" id="submit">
			</form>
			</div>
			<?php
			if(!empty($_POST["name"]) && !empty($_POST["password"])) {

			}
			?>
			<div id="continue">
				<a href="forum-Login.php">Continue</a>
			</div>
		</section>
		<footer>
			<address>Bulgaria Sofia 1510 tel:+359 0888123456</address>
		</footer>
	</body>
</html>