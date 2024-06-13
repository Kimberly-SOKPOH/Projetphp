<?php 

session_start();
require "database.php";

if(empty($_POST["user"]) || empty($_POST["motDePasse"]) ){
    $_SESSION["loginError"] = "les données d'authentifications sont obligatoires";
    header("location:connEmp.php");
    exit();
}

$statement = $pdo->prepare('SELECT* FROM employe WHERE user= :user AND psw = :motDePasse');
$statement->execute([
    ':user' => $_POST['user'],
    ':motDePasse'=> $_POST['motDePasse'],
]);
$employe = $statement->fetch(PDO::FETCH_ASSOC);
if($employe){
    $_SESSION['user'] = $employe['user'];
    $_SESSION['fonction'] = $employe['fonction'];
    unset($_SESSION['loginError']);
    header('location: espacePrive.php');
    exit();
} else{
    $_SESSION['loginError'] = "Les données d'authentification sont incorrects ";
    header('location:connEmp.php');
    exit();

}



?>