<!DOCTYPE html>
<html>
<head>
	<title>Registration Result</title>
</head>
<body>
	<?php 
		if(isset($_POST("username"))&&isset($_POST("password"))&&isset($_POST("confirmPassword")))
		{
			$username = $_POST("username");
			$password = $_POST("password");
			$confirmedPassword = $_POST("confirmPassword");
			if($password != $confirmedPassword)
			{
				echo "Passwords do not match, please go back to the <a href='register.html'>registration screen</a> and try again.";
			}
			else
			{
				$password = md5($password);
				$conn = new mysqli("localhost", "root", "", "assignment2");
				if($conn->connect_error)
				{
					die("Connection failed: " . $conn->connect_error);
				}
				$sql = "INSERT INTO users VALUES ('$username','$password')";
				$sqlconn->query($sql);
				$sqlconn->close();
			}
			echo "Registration confirmed, please login in via <a href='loginscreen.html'>this page</a>";
		}
		else
		{
			echo "Not all forms filled, please go back to the <a href='register.html'>registration screen</a> and try again.";
		}
	 ?>
</body>
</html>