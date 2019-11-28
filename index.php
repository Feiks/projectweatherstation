
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "weatherstaion";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else 
echo("database connected");


$sql = "SELECT * FROM rain_guage";
$result = $conn->query($sql);
?>
   <body style="background-color:grey;">

<h1>Hello everyone</h1>
<p>Hi everyone this is my primitive site for the weather station</p>
<table>
<tr>
<th style="color:blue;">Rainguage (cfs)</th>
<th style="color:blue;">Windspeed (mile per hour)</th>
<th style="color:blue;">Temperature °C</th>
<th style="color:blue;">Light-sensor (lux)</th>
<th style="color:blue;">Humidity (grams per cubic meter)</th>
<th style="color:blue;">Pressure (Pa) </th>
</tr>
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

echo"<tr><form action = index.php method = post>";
//echo"<td><input type=number name = id value='" .$row['id']."'></td>";
echo"<td><input type=text name = fname value='" .$row['Rain_guage']."'></td>";
echo"<td><input type=text name = phone value='".$row['wind_speed']."'></td>";
echo"<td><input type=text name = address value='".$row['temperature']."'></td>";
echo"<td><input type=text name = device value='".$row['light_sensor']."'></td>";
echo"<td><input type=text name = date value='".$row['humidity']."'></td>";
echo"<td><input type=text name = date value='".$row['pressure']."'></td>";

echo"</form></tr>";


}
} else {
    echo "0 results";
}
$conn->close();
?>






</html>