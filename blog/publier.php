<?php
$servername = "localhost";
$username = "id10419326_moi";
$password = "Simplon974!";
$dbname = "id10419326_modele";
$id = $_GET['id'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE nouveau SET etat='publier' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: affichage.php');
} else {
    echo "Error updating record: " . $conn->error;
}

?>


