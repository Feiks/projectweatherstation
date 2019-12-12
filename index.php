<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:digitalstation.database.windows.net,1433; Database = digitalstation", "feliks", "{feliks003}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "feliks", "pwd" => "{your_password_here}", "Database" => "digitalstation", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:digitalstation.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
echo "Hello world!"; 
?>
