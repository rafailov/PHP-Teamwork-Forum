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
				<input type="password" placeholder="Re-Password" required="required" name="password2"><br>
				<input type="submit" value="Submit" id="submit">
			</form>
			</div>
			<?php
			if($_POST && !empty($_POST["name"]) && !empty($_POST["password"]) && !empty($_POST["password"])) {
				require_once 'Connection.php';
				$name=trim($_POST["name"]);
				$pass=trim($_POST["password"]);
				$pass2=trim($_POST["password2"]);


				$db = new DatabaseConnect;
				$sql='SELECT * FROM `users`';
				$result=$db->execute($sql);

				$error="error";
				if ($_POST) {


					$error="";
				    if (mb_strlen($name) < 5 && mb_strlen($pass) < 5 && mb_strlen($pass2) < 5) {
				        $error.='Потребителското име или паролата е прекалено къса ! ';
				    }


				    if ($pass != $pass2) {
				        $error.='Паролите не съвпадат !  ';
				    }


				    while ($row = $result->fetch_assoc()) {
				        if ($row['user_name'] == $name) {
				            $error.='Вече съществува такъв потребител !';
				        }
				    }


				    if(mb_strlen($error)>0){
				    	echo "<div class='userInfo'><p>{$error}</p></div>";
					}else{
					    $options = ['cost' => 12];
					    $hashedPW = password_hash($pass, PASSWORD_BCRYPT, $options);

					    $escapedName=$db->escape($name);
					    $escapedPW=$db->escape($hashedPW);

					    $insertSQL="INSERT INTO `forum`.`users` (`user_name`, `user_pass`) VALUES ('".$escapedName."','".$escapedPW."')";
					    $queryInsert =$db->execute($insertSQL);
					}
				}
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