<script type="text/javascript">
    function show_alert() {
    var msg = "Username and Password is mandatory";
    alert(msg);
    }
</script>

<?php
	include("connection.php");

	if (isset($_POST['login'])) {

		$username = $_POST['username'];
		$password = $_POST['password'];

		if ($username == "")
		 echo '<script type="text/javascript"> show_alert(); </script>';

		elseif ($password == "")
			 echo '<script type="text/javascript"> show_alert(); </script>';
		else {
			$query = "SELECT * FROM users
			WHERE username = '$username' AND password = '$password'";

			$result = mysqli_query($con, $query);

			if (mysqli_num_rows($result) > 0)
				echo "Hello, " . $username;
			else
				echo "Error!";
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
					<h1 class="center title"> Login into your ToDoist </h1>
						<form class = "center login-form" method="POST" action="">
							<div>
								<input name="username" type="text" placeholder="Username">
							</div>
							<div>
								<input name="password" type="password" placeholder="Password">
							</div>
							<div>
								<input name="login" type="submit" value="Log In">
							</div>
				<div>
				</form>
		</body>
</html>
