<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Team "Spike" - Forum</title>
		<script src="scripts/jquery-1.11.1.min.js"></script>
		<script src="scripts/bootstrap.min.js"></script>
		<link rel="stylesheet" href="styles/main.css">
	</head>
	<body>
		<header>
			<h1>
				<a href="#"><img src="img/logo.jpg" name="logo" alt="logo"/>FORUM.BG</a><p>Welcome to Forum.BG</p>
			</h1>
			<form>
				<a href="#forum-Registration.php"><input type="submit" value="registration" id="registration"></a>
				<a href="#"><input type="submit" value="login" id="login"></a>
			</form>	
		</header>
		
		<section>
			<div id="wrapper">
				<form method="post">
				<input type="text" name="title" placeholder="Title" id="title">
				<textarea name="content"></textarea>
				<input type="submit" value="Add new theme" id="addNewTheme">
				</form>
				<?php
				if(isset($_POST['title']) && isset($_POST['content'])){
					$title = $_POST['title'];
					"<br><br>";
					$content = $_POST['content'];

					echo "<div class=\"article\">";
					echo "<h4>$title</h4>";
					echo "<div>$content</div>";
					echo "</div>";
				}
				?>
			</div>
		</section>
		
		<footer>
			<address>Bulgaria Sofia 1510 tel:+359 0888123456</address>
		</footer>

    <script src="scripts/script.js"></script>
</body>
</html>