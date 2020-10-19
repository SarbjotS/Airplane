<?php
session_start();
$hostname = "localhost";
$username = "root";
$password = "";
$connect = mysqli_connect($hostname, $username, $password, "assignment2");
$query = "SELECT * FROM bookings";
$UserBookings = "";

$temp = $temp1 = mysqli_query($connect, $query);
while($tb1 = mysqli_fetch_array($temp1))
{
    $UserBookings = $UserBookings."<tr><td>$tb1[0]</td><td>$tb1[1]</td><td>$tb1[2]</td></tr>";
}
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
    echo $UserBookings;
    ?>

</table>
<h4  style="margin-left: 40%">Please Select the Flight you want to cancel</h4>
<?php
$query = "SELECT * FROM bookings";
$temp = $temp1 = mysqli_query($connect, $query);
?>
<form method="post" action="Cancelflight.php" style="margin-left: 45%">
    <select name="routeList">
        <<?php foreach ($temp as $rl): ?>
            <?=$flightID = $rl['bookingID'];?>
            <option value=<?= $flightID?>><?= $rl['bookingID']?></option>
        <?php endforeach ?>
    </select>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
