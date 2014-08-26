<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Team "Spike"-Forum</title>
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
				<div id="registration"><a href="forum-Registration.php">Registration</a></div>
				<div id="registration"><a href="forum-Login.php">Login</a></div>
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
					$content = $_POST['content'];

					echo "<div class=\"article\">";
					echo "<h4>";
					echo htmlentities($title);
					echo "</h4>";
					echo "<span>" . htmlentities($content) . "</span>";
					echo "</div>";
				}
				?>
                <div class="article">
                    <h4>Example title</h4>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed ultricies ipsum.
                        Nullam id lacus eleifend, feugiat neque a, posuere turpis. Vestibulum et facilisis odio, ut ultricies sem.
                        Proin id felis vel libero maximus pulvinar sit amet id quam. Fusce est diam, bibendum eget mauris quis,
                        cursus lacinia arcu. Aliquam quis consequat est. Cras dui velit, tempus sed cursus sit amet, placerat at arcu.
                        Morbi eget varius dui. Nam gravida ligula eu ligula ullamcorper, eget faucibus arcu porta. Vivamus vitae volutpat nulla.
                        Phasellus ut consequat justo. Quisque in hendrerit nibh. Vestibulum sodales ornare metus id auctor.
                        Sed nunc dui, cursus vel orci sed, finibus pellentesque libero. Duis vulputate ut elit in auctor.</span>
                </div>
			</div>
		</section>
		
		<footer>
			<address>Bulgaria Sofia 1510 tel:+359 0888123456</address>
		</footer>

    <script src="scripts/script.js"></script>
</body>
</html>