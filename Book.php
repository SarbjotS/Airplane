<?php
$hostname = "localhost";
$username = "root";
$password = "";
$connect = mysqli_connect($hostname, $username, $password, "assignment2");
$query = "SELECT * FROM destinations";
$AirportInformation = "";
$route = "";

$temp =  mysqli_query($connect, $query);


while($tb1 = mysqli_fetch_array($temp))
{
    $AirportInformation = $AirportInformation."<tr><td>$tb1[0]</td><td>$tb1[1]</td><td>$tb1[2]</td></tr>";
}
$query1 = "SELECT * FROM routes";
$temp1 = mysqli_query($connect, $query1);

while($tb2 = mysqli_fetch_array($temp1))
{
    $route = $route."<tr><td>$tb2[0]</td><td>$tb2[1]</td><td>$tb2[2]</td><td>$tb2[3]</td></tr>";
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
    <script src="ReturnAvailableFlights.js"></script>
    <title>Book!</title>

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
    <h1>Book!</h1>
</div>
<h2 class="A">Airports</h2>
<table style="width:75%" align="center">
    <tr>
        <th>Airport code</th>
        <th>Airport</th>
        <th>Region</th>
    </tr>
    <?php
    echo $AirportInformation;  ?>


</table>
<br><br><br>
<table style="width:75%" align="center">
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
<br><br>
<div class="Halp">
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

</div>
<textarea class="Select" id="ShowDetailsOfFlight" rows="6" cols="50";>
    </textarea>
</body>
</html>