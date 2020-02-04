<?php
$servername = "localhost";
$username = "id10419326_moi";
$password = "Simplon974!";
$dbname = "id10419326_modele";
$id = $_GET['id'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // sql to delete a record
    $sql = "DELETE FROM nouveau WHERE id=$id";
    $id = $_GET['id'];
    // use exec() because no results are returned
    $conn->exec($sql);
    header('Location: affichage.php');
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>