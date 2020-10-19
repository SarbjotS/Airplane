<!DOCTYPE html>
<html>
<head>
	<title>Flights Page</title>
</head>
<body>
	<?php
	if(session_status() != "PHP_SESSION_ACTIVE")
	{
		echo "Please log in <a href='loginscreen.html'>here</a> to register your booking";
	}
	else
	{
		
			$hostname = "localhost";
			$username = "root";
			$password = "";
			$connect = mysqli_connect($hostname, $username, $password, "assignment2");
			if($connect->connect_error)
			{
				die("Connection failed: " . $connect->connect_error);
			}
			$flightID = $_POST["routeList"];
			$user = $_SESSION["userID"];
			$query = "INSERT INTO bookings(flightID,userID) VALUES ('$flightID', '$user')";
			$connect->query($query);
			$connect->close();
			echo "Booking successfully made, please click <a href='index.html'>here</a> to return to the main page";
	}
	?>	
</body>
</html>