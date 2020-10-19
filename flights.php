<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="2;url=index.html" />

    <title>Flights Page</title>
</head>
<body>
	<?php
	session_start();
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) 
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
		$user = $_SESSION["user_id"];
		$query = "INSERT INTO bookings(flightID,userID) VALUES ('$flightID', '$user')";
		$connect->query($query);
		$connect->close();
		echo "Booking successfully made, please click <a href='index.html'>here</a> to return to the main page";
	}
	else
	{
		echo "Please log in <a href='loginscreen.html'>here</a> to register your booking";	
	}
	?>
<p>You will be redirected to the index page in 3 seconds...</p>
</body>
</html>