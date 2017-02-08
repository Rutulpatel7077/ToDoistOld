<script type="text/javascript">  // This is a alert message for tha javascript
    function show_alert() {
    var msg = "Username and Password is mandatory";
    alert(msg);
    }
</script>

<!--PHP form-->
<?php
	include("connection.php");   // connection to database server
	if (isset($_POST['login'])) {

		$username = $_POST['username'];
		$password = $_POST['password'];

		if ($username == "")
		 echo '<script type="text/javascript"> show_alert(); </script>';   // call to javascript alert message

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
<!-- User interface in html language-->
<!DOCTYPE html>
<html>
	<head>
		<link rel = "stylesheet" type = "text/css" href="style.css"> <!-- This is link to the css-->
		<title>ToDoist</title>
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
