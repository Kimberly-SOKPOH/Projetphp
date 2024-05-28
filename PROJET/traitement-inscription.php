<?php

 require "../connexion-php/database.php";

 if(isset($_SERVER["REQUEST_METHOD"]) == "POST" && isset($_POST['inscription'])){
    echo "<script>alert('ok ');</script>";

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $motDePasse = $_POST["motDePasse"];
    $comfirmation = $_POST["confirmation"];

    // verifié si l'email et lz nom existaient déja
    $statement = $pdo->prepare('SELECT * FROM inscrits WHERE nom=:nom OR email=:email');
    $statement -> execute([
        ':nom' => $nom,
        ':email'=> $email,
    ]);


    // message d'avertissement en cas de meme nom ou email
    if($statement->rowCount()> 0){
         echo "<script>alert('Ce nom d'utilisateur ou cet email est déjà utilisé');</script>";
    } else {
        // si le mot de passe et sa confirmation sont conformes 
        if($motDePasse == $comfirmation){

            $statement = $pdo ->prepare('INSERT INTO inscrits(nom,prenom ,email,mot_de_passe,confirmation ) VALUES (:nom, :prenom , :mot_de_passe, :confirmation)');

            $statement -> execute([
                ':nom'=> $nom ,
                ':prenom' => $prenom, 
                ':mot_de_passe' => $motDePasse,
                ':email' => $email, 
                ':confirmation'=>  $comfirmation,
            ]);
            echo '<script>alert("inscription réussi")</script>';
            header("Location: affichage-nouveau.php");
                exit();
        } else {
            echo '<script>alert("mot de passe non confirmé")</script>';
        }
    }
   
 }


?>






