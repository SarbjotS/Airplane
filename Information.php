<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "airline";
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$query = "SELECT * FROM aircraft";


// result for method one
$result1 = mysqli_query($connect, $query);

// result for method two
$result2 = mysqli_query($connect, $query);

$AirplaneInformation = "";

while($row2 = mysqli_fetch_array($result2))
{
    $AirplaneInformation = $AirplaneInformation."<tr><td>$row2[0]</td><td>$row2[1]</td><td>$row2[2]</td><td>$row2[3]</td></tr>";
}
