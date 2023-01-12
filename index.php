<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Utilisateurs</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <a href="ajouter.php" class="Btn_add"> <img src="images/plus.png"> Ajouter</a>
       <?php 

include 'connexion.php';
$sql = "SELECT id, nom, prenom, age FROM infos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>id</th> <th>Nom</th ><th>Prenom</th><th>Age</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["nom"]."    ".$row["prenom"]."      ".$row["age"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();

?>
       




    </div>
</body>

</html>