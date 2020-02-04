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
    <link rel="stylesheet" href="style.css">
    <title>BLOGGY</title>
</head>

<body>


  

        <header>
            <div class="head">
                <div class="title">BLOGGY</div>
                <div class="compte">Bonjour <?php
    echo $_SESSION['pseudo'];
    ?>
    <form  action="deco.php" method="POST">
<input type="submit" value="deconnexion" > 
    </form></div>
            </div>
        </header>
       
            <div class="center">
                <div class=" admin"><h1>Partie d'administration du blog</h1></div>
                <div class="box">
                    <div class="colonne">
                        <div class="element1"><div class="dedans"><a href="rediger.php">REDIGER</a></div></div>
                        <div class="element1"><div class="dedans"><a href="affichage.php">BROUILLON</a></div></div>
                    </div>
                    <div class="colonne2">
                    <div class="element"><div class="dedans"><a href="blog.php"> MON BLOG</a></div></div>
                    
                    </div>
                </div>
            </div>

            
        </div>
       


    
</body>

</html>