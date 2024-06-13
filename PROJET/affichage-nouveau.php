<?php
session_start();
$nom = $_SESSION['nom'];
require "database.php" ;

$statement = $pdo->prepare('SELECT * FROM inscrits,posts WHERE inscrits.nom = posts.nom ORDER BY posts.id');
$statement->execute();
$posts = $statement->fetch(PDO::FETCH_ASSOC);

?>;

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body id="body">
    
    <!-- header -->
    <header class="2xl:container 2xl:mx-auto">
            <div class="bg-blue-300 shadow-lg py-5 px-7">
                <nav class="flex justify-between">
                    <div class="flex items-center space-x-3 lg:pr-16 pr-6">                       
                        <h2 class=" font-normal text-4xl  leading-15 text-white">MyBlog</h2>
                    </div>
                    <ul class=" md:flex  space-x-2">
                           <a href="profile.php"><img src="img.jpeg" class = " border-white  px-3  py-2 text-base w-4 h-4 font-normal rounded-full shadow "></a>
                           <a href="deconnection.php"> <button class = " bg-white border-white focus:bg-gray px-3  py-2 text-base font-normal rounded shadow "  type="button">Se deconnecter</button></a> 
                    </ul>
                    
                </nav>  
            </div>
    </header>  

    <h1 class=" text-center font-bold text-cyan-600 text-2xl my-6 " > Bienvenue <?php echo $nom ?></h1>

    <!-- <?php foreach( $posts as $post) : ?> -->
        <div class=" bg-blue-100 w-3/4 h-20  shadow-lg rounded-lg mx-auto my-3 " >
            <h1 class=""><?php echo $post["titre"] ?></h1>
            <p><?php echo $post['contenu'] ?></p>
        </div>
    <!-- <?php endforeach  ?> -->

    <footer class=" flex justify-self-end ">
        <a href="craetePost.php"></a><button class = " bg-red-400 border rounded-full border-white flex text-center h-14 w-14 ml-auto mr-3 mt-96 mb-0 text-base font-bold shadow " > <strong>+</strong></button>
    </footer>

   