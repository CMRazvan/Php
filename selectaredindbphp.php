<?php
// Declar Variabilele , credentiale
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Creerea conexiunii
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificicarea conexiunii
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// Aici citim din baza de date myDB din tabela MyGuests din coloanele id, firstname, lastname
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    // Aici le afisam pe rand id, firsname, lastname
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>