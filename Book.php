<?php
$hostname = "localhost";
$username = "root";
$password = "";
$connect = mysqli_connect($hostname, $username, $password, "assignment2");
$query = "SELECT * FROM destinations";
$AirportInformation = "";
$route = "";
$flights = "";

$temp = $temp1 = mysqli_query($connect, $query);


while($tb1 = mysqli_fetch_array($temp1))
{
    $AirportInformation = $AirportInformation."<tr><td>$tb1[0]</td><td>$tb1[1]</td><td>$tb1[2]</td></tr>";
}
$query = "SELECT * FROM routes";
$temp = $temp1 = mysqli_query($connect, $query);

while($tb2 = mysqli_fetch_array($temp1))
{
    $route = $route."<tr><td>$tb2[0]</td><td>$tb2[1]</td><td>$tb2[2]</td><td>$tb2[3]</td></tr>";
}

$query ="SELECT routeID,flightID,flightDate,flightTime,price FROM flights";
$temp1 = mysqli_query($connect, $query);

while($tb3 = mysqli_fetch_array($temp1))
{
    $flights = $flights."<tr><td>$tb3[0]</td><td>$tb3[1]</td><td>$tb3[2]<td>$tb3[3]</td><td>$tb3[4]</td></tr>";
    // echo $flights;
}
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

<h2 class="A"><strong>Routes</strong></h2> <!--Can't use div tags, mess up css-->
<h4 class="A"><strong>Enter where you'd like to go please</strong></h4>
<input type="text" id="searchRoute"  style="margin-left: 42%"
       onkeyup="SearchFunction(2)" placeholder="Enter Point B here...">

<h2 class="A">ID</h2>
<h4 class="A"><strong>Enter Flight ID to learn more</strong></h4>
<input type="text" id="TakeThis" style="margin-left: 42%" onkeyup="SearchRoutes()"
       placeholder="Enter ID here...">
<button onclick="ShowFlightOnBrowse()" type="button" > Submit </button>


<table style="width:75%" align="center" id="RoutesTable">
    <tr>
        <th>ID</th>
        <th>Point A</th>
        <th>Point B</th>
        <th>Distance</th>

    </tr>
    <?php
    echo $route;
    ?>

</table>
<!-- Flight times taken from  https://flighttime-calculator.com/ -->
<table style="width:75%" align="center" id="DateTimeTable" onclick="window.location='#';">
    <tr>
        <th>ID</th>
        <th>Flight ID</th>
        <th>Time</th>
        <th>Date</th>
        <th>Price</th>
    <?php
    echo $flights;
    ?>
</tr>
</table>
<h4  style="color: black;background-color: white; margin-left: 40%; margin-right: 39%"><strong>Please Select the Flight you want to book</strong></h4>
<?php
$query = "SELECT * FROM flights";
$temp = $temp1 = mysqli_query($connect, $query);
?>
<form method="post" action="flights.php" style="margin-left: 45%"">
    <select name="routeList">
        <<?php foreach ($temp as $rl): ?>
            <?=$flightID = $rl['flightID'];?>
            <option value=<?= $flightID?>><?= $rl['flightID'], ' -> ', $rl['routeID']?></option>
        <?php endforeach ?>
    </select>
    <input type="submit" name="submit" value="Submit">
</form>

<div style="margin-left:37%" >

    <textarea class="Select"  style="margin-left: 0%;" id="ShowBrowseFlightDetails" rows="3" cols="60";>
</textarea>
</div>


<!-- <textarea class="Select" style="margin-left:20% " id="ShowAvailableDates" rows="12" cols="25";>
</textarea> -->



</body>
</html>