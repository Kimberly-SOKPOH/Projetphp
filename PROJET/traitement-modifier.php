<?php
session_start();
require 'database.php';
if($_SERVER['REQUEST_METHOD'] ==  'POST'){
    // recupérer lme id mis dans le lien
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }

    $statement = $pdo -> prepare('UPDATE posts SET titre = :titre , contenu = :contenu  WHERE id = :id');
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];
    $id = $_GET['id'];

   if( $statement -> execute([
        ':id' => $id,
        ':titre' => $titre,
        ':contenu' => $contenu,
    ])){;
   
    header('Location:affichage-nouveau.php');
    }
}



?>