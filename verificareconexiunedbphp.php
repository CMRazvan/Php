<?php
// Declar Variabilele , credentiale.
$servername = "localhost";
$username = "username";
$password = "password";

// Creerea conexiunii
$conn = new mysqli($servername, $username, $password);

// Verificicarea conexiunii
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>