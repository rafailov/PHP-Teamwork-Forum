<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<tiltle>Team "Spike" - Forum-Registration</title>
		<link rel="stylesheet" href="styles/forum-Registration.css">
	</head>
	<body>
		<header>
			<a href="index.php">forum</a>
		</header>
		<section>
			<form action="" method="post">
				Name:<input type="text" name="name"><br>
				E-mail:<input type="text" name="email"><br>
				Password:<input type="password" placeholder="Your Password" name="your-password"><br>
				<input type="submit" value="Submit">
			</form>
			<?php
			if(isset($_POST["name"])) {
			?>
			Welcome
			<?php
			echo htmlentities($_POST["name"]);
			?><br>
			Your email is:<?php echo htmlentities($_POST["email"]); ?>
			<?php } ?>
		</section>
		<footer>
		
		</footer>
	</body>
</html>