<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="StyleSheet.css">
    <script src="SearchFunction.js" ></script>
    <script src="ShowFlightOnBrowse.js" ></script>
    <script src="ReturnAvailableFlights.js"></script>
    <script src="SearchRoutes.js"></script>




    <title>Book!</title>
</head>

<body id="BrowseImage">
<ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="Book.php">Book</a></li>
    <li ><a href="Browse.php">Browse</a></li>
    <li><a href="Cancel.php">Cancel Booking</a></li>
    <li id="LoginButton"><a href="loginscreen.html">Login</a> </li>

</ul>

<h2 class="A"><strong>Cancel a booking</strong></h2>
<table style="width:75%" align="center">
    <tr>
        <th>Flight</th>
        <th>Date</th>
        <th>Price</th>

    </tr>
    <?php
    //echo ;
    ?>

</table>
</body>
</html>
