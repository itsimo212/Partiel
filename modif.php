<?php 

    include 'connexion.php';
		
	    $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];
    
		
		
		$sql = "SELECT * FROM infos WHERE nom='$nom' LIMIT 1"; 

        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_assoc($result); 

		if (isset($prenom,$age)){
			$query= "UPDATE infos set prenom='$prenom', age='$age' where nom ='$nom'";
			$update=mysqli_query($conn,$query);
			echo "<script>alert('Update Sucessfully'); window.location='index.php'</script>";}
		else{
			echo "<script>alert('Your new and Retype Password is not match'); window.location='index.php'</script>";
		}
    
	




?>