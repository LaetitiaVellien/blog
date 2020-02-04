<?php 
$id=$_GET['id'];
$servername ="localhost";
$username ="id10419326_moi";
$password ="Simplon974!";
$dbname ="id10419326_modele";

$conn =new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT id, titre, date, auteur, contenu, image FROM nouveau WHERE id=$id";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    $id=$row["id"];
    $titre = $row["titre"];
    $date = $row["date"];
    $auteur = $row["auteur"];
    $contenu = $row["contenu"];
    $image = $row["image"];  
}
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="rediger.css">
    <title>BLOGGY-Modifier un article</title>
</head>

<body>
<header>
            <div class="head">
                <div class="title"><a href="index.html">BLOGGY</a> </div>
                <div class="compte">compte</div>
            </div>
        </header>
        <form action="modification.php?id=<?php echo($id)?>" method="post"> 
        <div class="groupe"> <input type="hidden" name="id" value="<?php echo($id)?>"><br><br>
            <div class="text">
                <div class="editeur">
                    <div class="titre">
                        <form action="acceuil.php" method="post" id="form1">
                        <h1>Crée ton article:</h1><input class="titl" type="text" placeholder="Le Titre" name="titre" id="" value="<?php echo($titre)?>">
                    </div>
                    <div classs="doc"><textarea name="contenu" placeholder="Ton contenu"id="" cols="70" rows="40"><?php echo($contenu)?></textarea> 
                   <div class="bloc"> <input class="valider" type="submit" name="update" value="Modifier">  </div>
                     
                    </div>
                       
                </div>
            </div>

            <div class="cate">
                <div class=element>Nom de L'Auteur:<br><input type="text"placeholder="ex:Geraldine"  name="auteur" id="" value="<?php echo($auteur)?>"></div>
                <div class=element>Date de publication de l'article:<input type="date" name="date" id="" value="<?php echo($date)?>"></div>
                <div class=element>Lien de l'image <br><input type="text" placeholder="ex:https//belle-image.png"   name="image" id="" value="<?php echo($image)?>"></div>
                <div class=element> Page choisi: <br>
                    <select id="pet-select">Catégories
                        <option value="dog">Accueil</option>
                    </select>
                    
        </form>

                </div>
            </div>
        </div>



    </div>
   


    </div>

</body>

</html>



    




  
    
  
