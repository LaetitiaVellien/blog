<?php
$servername = "localhost";
$username = "id10419326_moi";
$password = "Simplon974!";
$dbname = "id10419326_modele";

$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];

$mdp2 = $_POST['mdp2'];

if($mdp == $mdp2){
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO utilisateur (id,pseudo,email,mdp)
    VALUES (null, '$pseudo', '$email', '$mdp')";
    // use exec() because no results are returned
    $conn->exec($sql);
    header ('Location: connexion.html');
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

}
else{
    echo "confirmation mdp incorrecte";
}
?>