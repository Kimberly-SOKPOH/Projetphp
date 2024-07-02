<?php
session_start();
require "database.php";

if(isset($_GET["id"])){
    $id = $_GET["id"];
    $statement = $pdo -> prepare('SELECT * FROM posts WHERE id = :id');
    $statement -> execute([
        'id' =>  $id
    ]);
    $post = $statement ->fetch(PDO::FETCH_ASSOC);
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>My post</title>
</head>

<form>
        <h1 class=" text-center font-bold text-cyan-600 text-2xl my-6 ">Voici votre post !</h1>

        <div class="editor mx-auto w-10/12 flex flex-col text-gray-800 border rounded-lg bg-blue-300 border-gray-300 p-4 shadow-lg max-w-2xl">
           
            <div class=" flex flex-col justify-evenly ">
                <input type="text" class=" bg-blue-50 border rounded border-gray-300 p-2 mb-4 outline-none"  value="<?php echo $post['id']; ?>" name="id" readonly>
                <input class=" bg-blue-50 border rounded border--300 p-2  mb-4 outline-none"  value="<?php echo $post['titre']; ?>" type="text" name="titre" readonly>
            </div>
            <textarea class=" bg-gray-100 sec p-3 h-60 border border-gray-300 outline-none" name="contenu" readonly> <?php echo $post['contenu']; ?> </textarea>
            
            <!-- buttons -->
            <div class="buttons mt-3 flex self-center ">
            <a href="affichage-nouveau.php" class = " bg-white border-white focus:bg-gray px-3 mx-2 py-2 text-base font-normal rounded shadow ">Ok</a>
            <a href="modifier.php?id=<?php echo $post["id"]?>" class = " bg-white border-white focus:bg-gray px-3 mx-2 py-2 text-base font-normal rounded shadow "> Modifier</a>
            <!-- supprimer -->
            <a href="supprimerPost.php?id=<?php echo $post["id"]?>" class = " bg-red-500 hover:bg-red-400 px-3 ml-2 py-2 text-base font-normal rounded shadow " onclick="return confirmSuppression(event)">
                Supprimer</a>
            </div>

        </div>

    <!-- <script>
        
        function confirmSuppression(e) {
            event.preventDefault(event)
            if (confirm('Êtes-vous sûr de vouloir supprimer ce post?')){
                return true;
                window.location ='supprimerPost.php?id=<?php echo $post["id"]?>';
            }else{
            }
        }
    </script> -->