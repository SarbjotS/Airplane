<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="2;url=index.html" />
    <title>Login Screen</title>
</head>
<body>
	<?php 
		session_start();
		if(isset($_POST['username']) && isset($_POST['password']))
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			$password = md5($password);
			$temp1 = 'temp1';
			$temp2 = 'temp2';
			$sqlconn = new mysqli("localhost", "root", "", "assignment2");
			if($sqlconn->connect_error)
			{
				die("Connection failed: " . $sqlconn->connect_error);
			}
			$sql = "SELECT password,userID FROM users WHERE username = '$username'";
			$result = $sqlconn->query($sql);
			$row = $result->fetch_assoc();
			if($row["password"] == $password)
			{
				$_SESSION["user_id"] = $row["userID"];
				echo "Login success, click <a href='index.html'>here</a> to return to the main page";
			}
			else
			{
				echo "Login failed, click <a href='loginscreen.html'>here</a> to return to the log in screen and try again.";
			}
			$sqlconn->close();
		}

    ?>
    <p>You will be redirected to the index page in 3 seconds...</p>

</body>