<?php 
session_start();
$nom = $_SESSION['user'];

require "database.php";

$statement = $pdo->prepare('SELECT nom, fonction FROM employe WHERE user = :user');
$statement->execute([
    ':user'=> $nom,
]);
$user = $statement->fetch(PDO::FETCH_ASSOC);
$_SESSION['fonction']= $user['fonction'] ;
$fonction = $_SESSION['fonction'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class=" flex flex-col h-screen" id="body">
    


    <!-- header -->
    <header class="2xl:container 2xl:mx-auto">
            <div class="bg-blue-300 shadow-lg py-5 px-7">
                <nav class="flex justify-between">
                    <div class="flex items-center space-x-3 lg:pr-16 pr-6">                       
                        <h2 class=" font-normal text-4xl  leading-15 text-white">MyBlog</h2>
                    </div>
                    <ul class=" md:flex  space-x-2">
                        <a href="sinscrire.php"><button class = " bg-white border-white focus:bg-gray px-3  py-2 text-base font-normal rounded shadow "  type="button">S'inscrire</button></a>
                        <button class = " bg-white border-white focus:bg-gray px-3  py-2 text-base font-normal rounded shadow "  type="button">Liste de Voyage</button>
                        <button class = " bg-white border-white focus:bg-gray px-3  py-2 text-base font-normal rounded shadow "  type="button">Se déconnecter</button>
                        <p></p>
                    </ul>
                </nav>  
            </div>
    </header>

    <div class=" flex  flex-col ">
        <h1 class=" text-cyan-600 font-bold text-center"><?php echo $nom  ?></h1>
        <p class="text-center"><?php echo  $fonction ?></p>
    </div>