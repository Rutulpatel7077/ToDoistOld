<script type="text/javascript">   // This is a alert message for tha javascript
    function show_alert() {
    var msg = "Username and Password is mandatory";
    alert(msg);
    }
</script>



<?php
	include("connection.php");     // connection to database server


	if (isset($_POST['signup'])) {

		$username = $_POST['username'];
		$password = $_POST['password'];

		if ($username == "")
			echo '<script type="text/javascript"> show_alert(); </script>';   // call to javascript alert message
		elseif ($password == "")
			echo '<script type="text/javascript"> show_alert(); </script>';

		else {

			$query = "INSERT INTO users (username, password)
			VALUES ('$username','$password')";

			if (mysqli_query($con, $query))
				echo window.alert("Registerd successfully");
			else
				echo "Error : " . mysqli_error($con);

		}
	}
?>

<!-- User interface in html language-->

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
					<input name="signup" type="submit" value="Sign up">
				</div>
	<div>
	</form>
</body>
</html>
