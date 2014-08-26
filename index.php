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
				<input type="submit" value="Add new topic" id="addNewTheme">
				</form>
				<?php
				if(!empty($_POST['title']) && !empty($_POST['content'])){
					$title = trim($_POST['title']);
					$content = trim($_POST['content']);
                    $err='';
                    /*
                     * if title lenght is < 5 symbols set error message
                     */
                    if (mb_strlen($title) < 5) {
                        $err.=' Title is too short. ';
                    }
                    /*
                     * if content lenght is < 5 symbols set error message
                     */
                    if (mb_strlen($content) < 5) {
                        $err.=' Content is too short. ';
                    }
                    if(empty($err)){
                        $db = new DatabaseConnect;
                        $sql = "INSERT INTO  `forum`.`topics` (".
                            "`topic_title` ,".
                            "`topic_content` ,".
                            "`topic_author_id` ,".
                            "`topic_date`)".
                            "VALUES (".
                            "'" . $db->escape($title) . "',  '" . $db->escape($content) . "',  '".$_SESSION['author_id']."',  '" . date('y-m-d') . "');";
                            /*$_SESSION['author_id'] - НЕ СЪДЪРЖА ВСЕ ОЩЕ ИД-ТО НА ПОТРЕБИТЕЛЯ КОЙТО ИСКА ДА ИМПОРТНЕ ТЕМА*/
                        $query = $db->execute($sql);
                    }
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