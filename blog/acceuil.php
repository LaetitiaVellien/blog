<?php
$servername = "localhost";
$username = "id10419326_moi";
$password = "Simplon974!";
$dbname = "id10419326_modele";

$titre = $_POST['titre'];
$date = $_POST['date'];
$auteur = $_POST['auteur'];
$contenu = $_POST['contenu'];
$image = $_POST['image'];
$cac=chr(92);

$contenu = str_replace("'", $cac."'", $contenu);
$contenu = str_replace('"', $cac.'"', $contenu);
$titre = str_replace("'", $cac."'", $titre);
$titre = str_replace('"', $cac.'"', $titre);



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO nouveau (id,titre,date,auteur,contenu,image)
    VALUES (null, '$titre', '$date', '$auteur','$contenu','$image')";
    // use exec() because no results are returned
    $conn->exec($sql);
    header('Location: affichage.php');
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
    



?>

