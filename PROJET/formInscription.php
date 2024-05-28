<?php

require "../connexion-php/database.php";

 if($_SERVER["REQUEST_METHOD"] == "POST"){

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


    // message d'avertissement en cas de meme nom ou email
    if($statement->rowCount()> 0){
         echo "<script>alert('Ce nom d'utilisateur ou cet email est déjà utilisé');</>";
    } else {
        // si le mot de passe et sa confirmation sont conformes 
        if($motDePasse == $comfirmation){

            $statement = $pdo ->prepare('INSERT INTO inscrits(nom,prenom,mot_de_passe,confirmation,email ) VALUES (:nom, :prenom , :mot_de_passe, :confirmation, :email)');

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




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Document</title>
</head>
<body>  

<div class= " shadow-xl rounded-xl bg-blue-100 px-10 flex justify-between w-3/4  h-auto mx-auto my-28 py-10 ">
    <!-- texte d' invite -->
    <div class = "w-60 flex flex-col h-auto justify-around">
         <h1 class="font-bold text-slate-900 text-4xl "> Créez votre compte ici!  </h1>
         <p class="font-bold text-black text-base ">Entrez vos identifiants pour créer votre compte.</p>
    </div>
      <!-- Formulaire d'insciption et de connection  -->
    <form class = "flex" method="POST" >
        <div class=" w-96 space-y-4 flex h-auto flex-auto flex-col  ">
          <label class=" font-bold text-slate-600  mx-5 text-base " for="nom">Nom d'utilisateur</label>
          <input class=" rounded border mx-5 px-2 h-8 focus:outline-none  border-indigo-600" type="text" name="nom" placeholder="Nom..." id="name">
          <label class=" font-bold text-slate-600  mx-5 text-base "  for="prenom">Prénom </label>
          <input class=" rounded border mx-5 px-2 h-8 focus:outline-none  border-indigo-600" type="text" name="prenom" placeholder="Prénom..." id="prenom">
          <label class=" font-bold text-slate-600  mx-5 text-base " for="nom">Email</label>
          <input class=" rounded border mx-5 px-2 h-8 focus:outline-none  border-indigo-600" type="mail" name="email" placeholder="xx@gmail.com..." id="mail">
          <label class=" font-bold text-slate-600  mx-5 text-base "  for="psw">Mot de passe</label>
          <input class=" rounded border mx-5 px-2 h-8 focus:outline-none  border-indigo-600" type="password" name="motDePasse"  placeholder="Mot de passe " id="password" autocomplete>
          <label class=" font-bold text-slate-600  mx-5 text-base "  for="psw">Confirmation du mot de passe </label>
          <input class=" rounded border mx-5 px-2 h-8 focus:outline-none  border-indigo-600" type="password" name="confirmation" placeholder="..." id="confirmer_password" autocomplete>

          <button class = " bg-white border-white focus:bg-gray w-52 px-3 mx-auto py-2 text-base font-normal rounded shadow " name="inscription" >Inscription</button>
        </div>
    </form> 
</div>

</body>
</html>