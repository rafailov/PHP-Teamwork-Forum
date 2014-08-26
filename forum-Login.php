<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="styles/forum-Login.css">
		<title>Forum-Login</title>
	</head>
	
	<body>
		<header>
			<h1>
				<a href="#"><img src="img/logo.jpg" name="logo" alt="logo"/>FORUM.BG</a>
			</h1>
		</header>
		<section>
			<div>
			<form method="post">
				<input type="text" name="user" placeholder="User-name" required="required" autofocus="autofocus">
				<input type="password" name="password" placeholder="Password" required="required">
				<input type="submit" value="Submit" id="submit">
			</form>
			</div>
		</section>

<?php
If(!empty($_POST['user']) && !empty($_POST['password'])) {
	require_once 'Connection.php';
	$user = trim($_POST['user']);
	$password = trim($_POST['password']);

	session_start();
	$db=new DatabaseConnect;
	$sql='SELECT * FROM `users`';
	$result=$db->execute($sql);


	while($row=$result->fetch_assoc()){
       if($row['user_name']==$user && password_verify($password, $row['user_pass'])){
           
           $_SESSION['isLogged']=TRUE;
           $_SESSION['user']=$user;
           
       } 
	}
	if(!$_SESSION['isLogged']){
	     echo "<div class='userInfo'><p>Invalid username or password, try again. </p></div>";
	 }else{
	 	header("Location:index.php");
	 }


 
}
?>

		<footer>
			<address>Bulgaria Sofia 1510 tel:+359 0888123456</address>
		</footer>
	</body>
</html>