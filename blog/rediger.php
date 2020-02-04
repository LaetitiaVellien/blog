<?php
// Start the session
session_start();
$pseudo=$_SESSION['pseudo'];
if(empty($pseudo)){
    header('Location: erreur.html');
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="rediger.css">
    <title>BLOGGY-Rediger un article</title>
</head>

<body>
   

        <header>
            <div class="head">
                <div class="title"><a href="index.php">BLOGGY</a> </div>
                <div class="compte">Bonjour <?php
    echo $_SESSION['pseudo'];
    ?>
    <form  action="deco.php" method="POST">
<input type="submit" value="deconnexion" > 
    </form></div>
            </div>
        </header>
        <div class="groupe">
            <div class="text">
                <div class="editeur">
                    <div class="titre">
                        <form action="acceuil.php" method="post" id="form1">
                        <h1>Crée ton article:</h1><input class="titl" type="text" placeholder="Le Titre" name="titre" id="">
                    </div>
                    <div classs="doc"><textarea name="contenu" placeholder="Ton contenu"id="" cols="70" rows="40"></textarea> 
                   <div class="bloc">   <button class="valider" type="submit" > Valider</button></div>
                     
                    </div>
                       
                </div>
            </div>

            <div class="cate">
                <div class=element>Nom de L'Auteur:<br><input type="text"placeholder="ex:Geraldine"  name="auteur" id=""></div>
                <div class=element>Date de publication de l'article:<input type="date" name="date" id=""></div>
                <div class=element>Lien de l'image <br><input type="text" placeholder="ex:https//belle-image.png"   name="image" id=""></div>
                <div class=element> Page choisi: <br>
                    <select id="pet-select">Catégories
                        <option value="dog">Accueil</option>
                    </select></form>
                    
                </div>
            </div>
        </div>



   
    

    </div>

</body>

</html>