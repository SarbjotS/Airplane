<?php
$hostname = "localhost";
$username = "root";
$password = "";
$connect = mysqli_connect($hostname, $username, $password, "airline");
$query = "SELECT * FROM destinations";
$AirportInformation = "";
$route = "";

$temp = $temp1 = mysqli_query($connect, $query);


while($tb1 = mysqli_fetch_array($temp1))
{
    $AirportInformation = $AirportInformation."<tr><td>$tb1[0]</td><td>$tb1[1]</td><td>$tb1[2]</td></tr>";
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
    <title>Browse!</title>
</head>
<body id="BrowseImage">
<div class="jumbotron text-center">
    <h1>Browse all of our routes!</h1>
</div>
<h2>Airports</h2>
<table style="width:75%" align="center">
    <tr>
        <th>Airport code</th>
        <th>Airport</th>
        <th>Region</th>
    </tr>
    <?php
    echo $AirportInformation;  ?>

</table>