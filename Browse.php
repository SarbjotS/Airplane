<?php
$hostname = "localhost";
$username = "root";
$password = "";
$connect = mysqli_connect($hostname, $username, $password, "airline");
$query = "SELECT * FROM destinations";
$AirportInformation = "";
$route = "";
$x = 0;
$TestArray = 0;

$query = "SELECT * FROM routes";
$temp = $temp1 = mysqli_query($connect, $query);


while($tb2 = mysqli_fetch_array($temp1))
{
    $route = $route."<tr><td>$tb2[0]</td><td>$tb2[1]</td><td>$tb2[2]</td><td>$tb2[3]</td></tr>";
}
$temp -> close();


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
<div class="jumbotron text-center">
    <h1>Browse all of our routes!</h1>
</div>

<h2 class="A"><strong>Routes</strong></h2> <!--Can't use div tags, mess up css-->
<h4 class="A"><strong>Enter where you'd like to go please</strong></h4>
<input type="text" id="searchRoute"  style="margin-left: 45%"
        onkeyup="SearchFunction(2)" placeholder="Enter destination here...">

<h2 class="A">ID</h2>
<h4 class="A"><strong>Enter Flight ID to learn more</strong></h4>
<input type="text" id="TakeThis" style="margin-left: 45%"
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
    print_r($route)
    ?>

</table>

<!-- New input button that shows flight details -->


</body>
</html>