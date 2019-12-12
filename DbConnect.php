<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:digitalstation.database.windows.net,1433; Database = SensorData", "Feliks", "{digital@01}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection Established Successfully";
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "Feliks", "pwd" => "{digital@01}", "Database" => "SensorData", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:digitalstation.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
