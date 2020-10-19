<!DOCTYPE html>
<html>
<head>
	<title>Registration Result</title>
</head>
<body>
	<?php 
		if((isset($_POST["username"]) == 1) && (isset($_POST["password"]) == 1) && (isset($_POST["confirmPassword"]) == 1))
		{
			$username = $_POST["username"];
			$password = $_POST["password"];
			$confirmedPassword = $_POST["confirmPassword"];
			$database = "localhost";
			$sqluser = "root";
			$sqlpw = "";
			$table = "assignment2";
			if($password != $confirmedPassword)
			{
				echo "Passwords do not match, please go back to the <a href='register.html'>registration screen</a> and try again.";
			}
			else
			{
				$password = md5($password);
				$conn = new mysqli($database, $sqluser, $sqlpw, $table);
				if($conn->connect_error)
				{
					die("Connection failed: " . $conn->connect_error);
				}
				$sql = "INSERT INTO users (username, password) VALUES ('$username','$password');";
				$conn->query($sql);
				$conn->close();
			}
			echo "Registration confirmed, please login in via <a href='loginscreen.html'>this page</a>";
		}
		else
		{
			echo "Not all forms filled, please go back to the <a href='register.html'>registration screen</a> and try again.";
		}
        session_start();

    ?>
</body>
</html>