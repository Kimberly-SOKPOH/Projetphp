<?php
session_start();

if(!isset($_SESSION['nom'])){
   header("location:formConnection.php");
   exit();
}
$createError = "";
if(isset($_SESSION["createError"])){
  $createError = $_SESSION["createError"];
}
?>

  <head>
  <script src="https://cdn.tailwindcss.com"></script>
  </head>   
<form action="traitement-createPost.php" method="POST">
        <h1 class=" text-center font-bold text-cyan-600 text-2xl my-6 ">Créez un post !</h1>

        <div class="editor mx-auto w-10/12 flex flex-col text-gray-800 border rounded-lg bg-blue-300 border-gray-300 p-4 shadow-lg max-w-2xl">
           
               <div class=" flex flex-col justify-evenly ">
                  <!-- <input class=" bg-blue-50 border rounded border-gray-300 p-2 mb-4 outline-none" placeholder="Identifiant" type="text" name="id"> -->
                  <input class=" bg-blue-50 border rounded border--300 p-2  mb-4 outline-none" placeholder="Title" type="text" name="titre">
               </div>
          
            
            <textarea class=" bg-gray-100 sec p-3 h-60 border border-gray-300 outline-none" spellcheck="false" placeholder="Describe everything about this post here" name="contenu"></textarea>
            <span class = " font-bold mx-5 text-base text-red-600 "><?php echo $createError?> </span>
            <!-- buttons -->
            <div class="buttons mt-3 flex self-center ">
            <button class = " bg-white border-white focus:bg-gray px-3  py-2 text-base font-normal rounded shadow " type="reset">Supprimer</button>
            <button class = " bg-white border-white focus:bg-gray px-3 ml-2 py-2 text-base font-normal rounded shadow "  type="submit">Poster</button>
            </div>
        </div>



