<?php
$hostname = "localhost";
$username = "root";
$password = "";
$connect = mysqli_connect($hostname, $username, $password, "airline");
$query = "SELECT * FROM aircraft";
$AirplaneInformation = "";

$temp = $temp1 = mysqli_query($connect, $query);


while($row2 = mysqli_fetch_array($temp1))
{
    $AirplaneInformation = $AirplaneInformation."<tr><td>$row2[0]</td><td>$row2[1]</td><td>$row2[2]</td><td>$row2[3]</td></tr>";
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
<body>
<div class="jumbotron text-center">
    <h1>Browse all of our flights!</h1>
</div>
<table style="width:75%" align="center">
    <tr>
        <th>Aircraft</th>
        <th>Destination</th>
        <th>Routes</th>
    </tr>
    <?php
            echo $AirplaneInformation;  ?>

</table>

</body>
</html>