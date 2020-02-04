<?php
$servername = "localhost";
$username = "id10419326_moi";
$password = "Simplon974!";
$dbname = "id10419326_modele";

$pseudo = $_POST['pseudo'];
$mdp = $_POST['mdp'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    $req = $conn->prepare("SELECT id, mdp FROM utilisateur WHERE pseudo = '$pseudo'");
    $req->execute();
    $resultat = $req->fetch();

    // use exec() because no results are returned
    if (!$resultat)
    {
        echo('tu es nulle putain');
    }
    else
    {
        if ($mdp==$resultat['mdp']) {
            session_start();
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['pseudo'] = $pseudo;
            header('Location: index.php');
        }
        else {
          header('Location: connexion.html');
        }
    }
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>