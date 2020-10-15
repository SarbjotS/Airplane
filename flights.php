<!DOCTYPE html>
<html>
<head>
	<title>Flights Page</title>
</head>
<body>
	<?php
	if(session_status() != "PHP_SESSION_ACTIVE")
	{
		echo "Please log in <a href="loginscreen.html">here</a> to register your booking";
	}
	else
	{
		
	}
	?>	
</body>
</html>