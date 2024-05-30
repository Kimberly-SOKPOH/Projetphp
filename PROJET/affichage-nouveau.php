<?php require "database.php" ;

$statement = $pdo->prepare('SELECT * FROM inscrits');
$statement->execute();
$inscrits= $statement->fetchAll(PDO::FETCH_ASSOC);

?>

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
                        <button class = " bg-white border-white focus:bg-gray px-3  py-2 text-base font-normal rounded shadow " id="connection" type="button">Se connecter</button>
                        <button class = " bg-white border-white focus:bg-gray px-3  py-2 text-base font-normal rounded shadow " id="inscription" type="button">S'inscrire</button>
                    </ul>
                </nav>  
            </div>
    </header>
    <h1 class=" text-center font-bold text-cyan-600 text-2xl my-6 " > Bienvenue </h1>

    <?php foreach( $inscrits as $inscrit) : ?>
        <div class=" bg-blue-100 w-3/4 h-20  shadow-lg rounded-lg mx-auto my-3 " >
            <h1 class=""></h1>
        </div>
    <?php endforeach  ?>

    <footer class=" flex justify-self-end ">
        <button id = "btn_create"class = " bg-red-400 border rounded-full border-white flex text-center h-14 w-14 ml-auto mr-3 mt-96 mb-0 text-base font-bold shadow " name="inscription" type="button">+</button>
    </footer>

   