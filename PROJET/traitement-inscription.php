<?php

 require "database.php";

if(isset($_SERVER["REQUEST_METHOD"]) == "POST" && isset($_POST['inscription'])){
   
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $motDePasse = $_POST["motDePasse"];
    $comfirmation = $_POST["confirmation"];

    // verifié si l'email et le nom existaient déja
    $statement = $pdo->prepare('SELECT * FROM inscrits WHERE nom=:nom OR email=:email');
    $statement -> execute([
        ':nom' => $nom,
        ':email'=> $email,
    ]);
     
    $user = $statement-> fetch(PDO::FETCH_ASSOC);
     var_dump($user);
 
    // message d'avertissement en cas de même nom ou email
    ;
    if($user["nom"] == $nom || $user["email"] == $email  ){ 
         echo '<script>alert("nom ou email deja utilisé")</script>';
    } else {
        // si le mot de passe et sa confirmation sont conformes 
        if($motDePasse === $comfirmation){

            $statement = $pdo ->prepare('INSERT INTO inscrits(nom,prenom ,mot_de_passe,confirmation,email ) VALUES (:nom, :prenom , :mot_de_passe, :confirmation, :email)');

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







