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
$query ="SELECT * FROM flights";
$temp = $temp1 = mysqli_query($connect, $query);

while($tb3 = mysqli_fetch_array($temp1))
{
$flights = $flights."<tr><td>$tb3[0]</td><td>$tb3[1]</td><td>$tb3[2]</td><td>";
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
    <script src="BrowseInformation.js" ></script>

    <title>Browse!</title>
</head>

<body id="BrowseImage">
<ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="Browse.php">Browse</a></li>
    <li><a href="Book.php">Book</a></li>
    <li><a href="Cancel.php">Cancel Booking</a></li>
    <li id="LoginButton"><a href="#">Login</a> </li>

</ul>

<div class="jumbotron text-center">
    <h1>Browse all of our routes!</h1>
</div>

<h2 class="A"><strong>Routes</strong></h2> <!--Can't use div tags, mess up css-->
<h4 class="A"><strong>Enter where you'd like to go please</strong></h4>
<input type="text" id="searchRoute"  style="margin-left: 42%"
       onkeyup="SearchFunction(2)" placeholder="Enter Point B here...">

<h2 class="A">ID</h2>
<h4 class="A"><strong>Enter Flight ID to learn more</strong></h4>
<input type="text" id="TakeThis" style="margin-left: 42%"
       placeholder="Enter ID here...">
<button  type="button" onclick="BrowseInformation()"> Submit </button>


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
<div id="R01" class="dropdown-content">
    <p>Flight ID: R01 </p>
    <p>Flight will start it's journey in Dairy Flat and arrive at Sydney</p>
    <p>The flight is approximately 3 hours long and will encompass a journey of 1164km</p>
    <button type="button" id="CloseButton" onclick=R01.style.opacity="0">Close</button>
    <p id="wingding">🏘------------✈-----------🏙</p>

</div>

<div id="R02" class="dropdown-content">
    <p>Flight ID: R02 </p>
    <p>Flight will start it's journey in Dairy Flat and arrive at Rotorua</p>
    <p>The flight is approximately 43 minutes long and will encompass a journey of 137km</p>
    <button type="button" id="CloseButton" onclick=R02.style.opacity="0">Close</button>
    <p  id="wingding">🏘------------✈-----------🏘</p>

</div>

<div id="R03" class="dropdown-content">
    <p>Flight ID: R03 </p>
    <p>Flight will start it's journey in Dairy Flat and arrive at Claris Airport</p>
    <p>The flight is approximately 31 minutes long and will encompass a journey of 581km</p>
    <button type="button" id="CloseButton" onclick=R03.style.opacity="0">Close</button>
    <p id="wingding">🏘------------✈-----------🏖</p>

</div>

<div id="R04" class="dropdown-content">
    <p>Flight ID: R04 </p>
    <p>Flight will start it's journey in Dairy Flat and arrive at Tuuta Airport</p>
    <p>The flight is approximately 1 hour 42 minutes long and will encompass a journey of 54km</p>
    <button type="button" id="CloseButton" onclick=R04.style.opacity="0">Close</button>
    <p id="wingding">🏘------------✈-----------🏖</p>

</div>

<div id="R05" class="dropdown-content">
    <p>Flight ID: R05 </p>
    <p>Flight will start it's journey in Dairy Flat and arrive at Lake Tekapo</p>
    <p>The flight is approximately 1 hour 42 minutes long and will encompass a journey of 472km</p>
    <button type="button" id="CloseButton"  onclick=R05.style.opacity="0">Close</button>
    <p id="wingding">🏘------------✈-----------🏖</p>

</div>
<h4 CLASS="Select"style="color: white">Origin</h4>
<select class="Select" id="From">
    <?php foreach ($temp as $r): ?>
        <</p> <option  value="<?= $r['code']; ?>"><?= $r['airport'];?></option>
    <?php endforeach;?>
</select>
<h4 class="Select" style="color: white">Destination</h4>

<select class="Select" id="To">
    <?php foreach ($temp as $r): ?>
        <option  value="<?= $r['code']; ?>"><?= $r['airport'];?></option>
    <?php endforeach;?>
</select>
<button style="margin-right: 40%" class="Select" onclick="ReturnAvailableFlights()">Submit</button>
<textarea class="Select" id="ShowDetailsOfFlight" rows="4" cols="50";>
    </textarea>

<p id="NextPage"><a href="Book.php"> Continue </a></p>

</body>
</html>