<!DOCTYPE html>
<html>
<head>
	<title>Cancel Flight</title>
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
		$bookingID = $_POST["cancelBooking"];
		$query = "DELETE FROM bookings WHERE bookingID='$bookingID'";
		$connect->query($query);
		$connect->close();
		echo "Booking successfully cancelled, please click <a href='index.html'>here</a> to return to the main page";
	}
	else
	{
		echo "Please log in <a href='loginscreen.html'>here</a> to cancel your booking";	
	}
	?>	
</body>
</html>