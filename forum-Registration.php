<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<tiltle>Team "Spike" - Forum-Registration</title>
		<link rel="stylesheet" href="styles/forum-Registration.css">
	</head>
	<body>
		<header>
		
		</header>
		<section>
			<form action="" method="get">
				Name:<input type="text" name="name"><br>
				E-mail:<input type="text" name="email"><br>
				Password:<input type="password" placeholder="Your Password" name="your-password"><br>
				<input type="submit">
			</form>
			<?php
			if(isset($_GET["name"])) {
			?>
			Welcome
			<?php
			echo htmlentities($_GET["NAME"])
			?><br>
			Your email is:<?php echo htmlentities(_GET["email"]) ?>
			<?php } ?>
		</section>
		<footer>
		
		</footer>
	</body>
</html>