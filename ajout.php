<?php 
     $nom = $_POST["nom"];
     $prenom = $_POST["prenom"];
     $age = $_POST["age"];

    include 'connexion.php';
        $stmt = $conn->prepare("INSERT into infos(nom, prenom, age) values (?, ?, ?)");
        $stmt ->bind_param("ssi",$nom, $prenom, $age);
        $stmt ->execute();
        echo "Submitted";
        $stmt ->close();
        $conn -> close();
    
    ?>