<?php
// Declar Variabilele , credentiale
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Creerea conexiunii
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//Aici zicem update adica modifica in tabela MyGuest coloana lastname punand 'Doe' in coloana unde are id 2
$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>