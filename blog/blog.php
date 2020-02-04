<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="acceuil.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<header>
                <div class="head">
                    <div class="title"><strong>ANIMORE</strong></div>
                    <div class="compte">
                        <ul>
                            <li>Home</li>
                            <li>Actu</li>
                            <li>Anime</li>
                            <li>Manga</li>
                            <li>Contact</li>
                            
                        </ul>
                    </div>
                </div>
                <div class="carousel">
                        <div class="carou">
                            <input class="open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                            <div class="item">
                            <img src="../blog/image/my-hero-academia-izuku-art.jpg">
                            </div>
                            <input class="open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                            <div class="item">
                                <img src="image/DEMON.jpg">
                            </div>
                            <input class="open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                            <div class="item">
                                <img src="image/sun.jpg">
                            </div>
                            <label for="carousel-3" class="carousel-control prev control-1">‹</label>
                            <label for="carousel-2" class="carousel-control next control-1">›</label>
                            <label for="carousel-1" class="carousel-control prev control-2">‹</label>
                            <label for="carousel-3" class="carousel-control next control-2">›</label>
                            <label for="carousel-2" class="carousel-control prev control-3">‹</label>
                            <label for="carousel-1" class="carousel-control next control-3">›</label>
                            <ol class="indicators">
                                <li>
                                    <label for="carousel-1" class="bullet">•</label>
                                </li>
                                <li>
                                    <label for="carousel-2" class="bullet">•</label>
                                </li>
                                <li>
                                    <label for="carousel-3" class="bullet">•</label>
                                </li>
                            </ol>
                        </div>
                    </div>
            </header>
 <h2> Nouveaux contenus: </h2>
<div class="plus">
   
<div class="ensemble">

<?php
$servername = "localhost";
$username = "id10419326_moi";
$password = "Simplon974!";
$dbname = "id10419326_modele";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, titre, date, auteur, contenu, image FROM nouveau WHERE etat='publier'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

?>


  <div class="card" style="width: 18rem;">
  <img src="<?php echo($row["image"]) ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo ($row["titre"])?></h5>
    <p class="card-text"><?php echo($row["auteur"]) ?><br><?php echo($row["date"]) ?></p>
    <a href="article.php?id=<?php echo($row["id"]) ?>" class="btn btn-primary">Voir plus</a>
  </div>
</div>
   
<?php
       
    }
?>
   </div>  
</div>

<?php
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
<footer>
    <div class="foot"> 
        <div class="blog"><strong>BLOG</strong> super mega cool, restez, vous verrez! </div>
        <div class="list"><p>Ici les reseaux social: </p> </div>
        <div class="contact">Contactez-nous: </div>
        

    </div>
     </footer>


</body>
</html>