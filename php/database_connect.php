<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "holesice_elevation";

// vytvoření propojení
$conn = new mysqli($servername, $username, $password, $database);

// kontatrola propojení, v případě neúspěchu chybové hlášení
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>