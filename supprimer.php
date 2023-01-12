<?php
  //connexion a la base de données
  include 'connexion.php';
		
	    $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
       
    
		
		
		$sql = "SELECT * FROM infos WHERE nom='$nom' LIMIT 1"; 

        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_assoc($result); 

		if (isset($nom,$prenom)){
			$query= "DELETE FROM infos Where nom='$nom'";
			$update=mysqli_query($conn,$query);
			echo "<script>alert('Update Sucessfully'); window.location='index.php'</script>";}
		else{
			echo "<script>alert('incorrect'); window.location='index.php'</script>";
		}
    header(Location : "index.php");