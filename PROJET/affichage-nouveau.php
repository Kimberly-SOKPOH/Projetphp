<?php
session_start();
require "database.php" ;
if (!isset($_SESSION['nom'])) {
    header("Location: formConnection.php");
    exit;
}else{

    // les profiles

//  if($_SESSION['imgNewprofile']){
//     $img = $_SESSION['imgNewprofile'];
//  } 

$nom = $_SESSION['nom'];

$statement = $pdo->prepare('SELECT id,titre,contenu FROM inscrits,posts WHERE inscrits.nom = posts.nom AND posts.nom = :nom ORDER BY posts.id');
$statement->execute([
    ':nom'=> $nom
]);
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
// var_dump($posts)
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
                           <form action="deconnection.php" method="POST" >
                                <input type="submit" value="Se déconnecter" class = " bg-white border-white focus:bg-gray px-3  py-2 text-base font-normal rounded shadow ">
                            </form>
                    </ul>
                    
                </nav>  
            </div>
    </header>  

    <h1 class=" text-center  text-cyan-600 text-2xl my-6 " > Bienvenue <?php echo $nom ?></h1>

     <?php foreach( $posts as $post) : ?> 
        <a href="showPost.php?id=<?php echo $post["id"]?>">
            <div class=" bg-blue-100 w-3/4 h-20 shadow-lg rounded-lg mx-auto my-3 " >
               <h1 class="pt-3 font-bold pl-3 "><?php echo $post["titre"] ?></h1>
               <p class="  font-bold pl-3 "><?php echo $post["contenu"] ?></p>
            </div>
        </a>
     <?php endforeach  ?> 
     <a href="craetePost.php" class = " bg-slate-800 text-white rounded-full flex align-center justify-self-center justify-center h-14 w-14 mx-auto mt-6 px-auto pt-3 text-xxl font-bold shadow-md">+</a>


<?php }?>
   