<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
$servername = "localhost";
$username = "id10419326_moi";
$password = "Simplon974!";
$dbname = "id10419326_modele";
$id = $_GET['id'];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT id FROM nouveau";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
   $id = $row['id'];
}
if(isset($_POST['coord'])){
    $var = $_POST['coord'];
    

foreach($var as $id){
    $sql =  "SELECT titre, date, auteur, contenu, image FROM nouveau WHERE id=$id";
    $result = $conn->query($sql); ?>
    <div class="card" style="width: 18rem;">
  <img src="<?php echo($row["image"]) ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo ($row["titre"])?></h5>
    <p class="card-text"><?php echo($row["contenu"]) ?></p>
    <a href="#" class="btn btn-primary">=Voir plus</a>
  </div>
</div>
<?php
    }

}
?>
