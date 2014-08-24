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
				<input type="text" name="name" placeholder="User-Name"><br>
				<input type="text" name="email" placeholder="E-mail"><br>
				<input type="password" placeholder="Password" name="your-password"><br>
				<input type="submit" value="Submit" id="submit">
			</form>
			</div>
			<?php
			if(isset($_POST["name"])) {
			echo "<div id=\"info\">";
			echo "Welcome, " . htmlentities($_POST["name"]) ."<br>" . "Your email is:" . htmlentities($_POST["email"]) ."<br>" . "Click \"Continue\"";
			echo "</div>";
			}
			?>
		</section>
		<footer>
			<address>Bulgaria Sofia 1510 tel:+359 0888123456</address>
		</footer>
	</body>
</html>