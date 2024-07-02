<?php 

session_start();
$_SESSION['createError'] ="";
require 'database.php';

if(empty($_POST['titre']) || empty($_POST['contenu']) ){
        $_SESSION['createError'] = "Terminez votre post." ;
} else{

    $statement = $pdo->prepare('INSERT INTO posts(id,titre,contenu,nom) VALUES ( :id, :titre, :contenu, :nom)');
    $statement->execute([
        ":id" => $_POST["id"],
        ":titre" => $_POST["titre"],
        ":contenu" => $_POST["contenu"],
        ":nom" => $_SESSION["nom"],
    ]);
    // $_SESSION
    header("location:affichage-nouveau.php");
    exit();
}
?>
