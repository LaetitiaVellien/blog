<?php
if(isset($_POST['update']))
{
    try {
        $pdoConnect = new PDO("mysql:host=localhost;dbname=id10419326_modele","id10419326_moi","Simplon974!");
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }
    $id = $_POST['id'];
    $titre = $_POST['titre'];
    $date = $_POST['date'];
    $auteur = $_POST['auteur'];
    $contenu = $_POST['contenu'];
    $image = $_POST['image'];
    

    $query = "UPDATE nouveau SET `titre`=:titre,`date`=:date,`auteur`=:auteur, `contenu`=:contenu, `image`=:image WHERE `id` = :id";
    
    $pdoResult = $pdoConnect->prepare($query);

    $pdoExec = $pdoResult->execute(array(":titre"=>$titre,":date"=>$date,":auteur"=>$auteur, ":contenu"=>$contenu,":image"=>$image,":id"=>$id));

    if($pdoExec)
    {
        header('Location: affichage.php');
    }else{
        echo 'ERROR Data Not Updated';
    }

}
?>