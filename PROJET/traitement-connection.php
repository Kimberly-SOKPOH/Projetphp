<?php 
session_start();
require "database.php";


if(empty($_POST['nom']) || empty($_POST['motDePasse'])){
            $_SESSION["loginError"] =" Veillez remplir tous les champs de saisie";
            header("location:formConnection.php");
            exit();
}        

$statement = $pdo->prepare("SELECT * FROM inscrits WHERE nom = :nom AND mot_de_passe = :motDePasse ");
$statement->execute([
    ':nom'=> $_POST['nom'],
    ':motDePasse'=> $_POST['motDePasse'],
]);
$user = $statement->fetch(PDO::FETCH_ASSOC);
if($user["nom"] == $_POST['nom'] && $user["mot_de_passe"] == $_POST['motDePasse']){
    $_SESSION["nom"] = $_POST['nom'];
    unset($_SESSION['loginError']);
    header("location:affichage-nouveau.php");
    exit();   
} else {
    $_SESSION['loginError'] = "Les données d'authentification sont incorrects, réesayez ou inscrivez-vous! ";
    header('location:formConnection.php');
    exit();
}


   

?>