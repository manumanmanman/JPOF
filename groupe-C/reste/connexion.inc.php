<?php

// $servername = "localhost";
// $username = "userjpof";
// $password = "ceciestlemotdepasseduuser";
// $database = "jpof";

$servername = "vps494300.ovh.net:3306";
$username = "jpof";
$password ="H1anx6*0";
$database = "jpof";






// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "ok";
}


    
?>