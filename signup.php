<?php
	include("connection.php");

	if (isset($_POST['signup'])) {

		$username = $_POST['username'];
		$password = $_POST['password'];

		if ($username == ""){
			echo alert("Please Enter Name");}
		elseif ($password == ""){
			echo alert("Please Enter Password");
		}
		else {

			$query = "INSERT INTO users (username, password)
			VALUES ('$username', '$password')";

			if (mysqli_query($con, $query))
				echo window.alert("Registerd successfully");
			else
				echo "Error : " . mysqli_error($con);

		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel = "stylesheet" type = "text/css" href="style.css">
	<title></title>
</head>
<body>
	<div class = "container">
		<h1 class="center title"> Signup for your ToDoist </h1>
			<form class = "center login-form" method="POST" action="">
				<div>
					<input name="username" type="text" placeholder="Username">
				</div>
				<div>
					<input name="password" type="password" placeholder="Password">
				</div>
				<div>
					<input name="sign up" type="submit" value="Sign up">
				</div>
	<div>
	</form>
</body>
</html>
