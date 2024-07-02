<?php 
session_start();
require "database.php";

if (!isset($_SESSION['nom'])) {
    header("Location: affichage-nouveau.php");
    exit;
}else{
    
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

<form  action="traitement-modifier.php?id=<?php echo $post['id'] ?>" method="POST">
        <h1 class=" text-center font-bold text-cyan-600 text-2xl my-6 ">Modifiez votre post!</h1>

        <div class="editor mx-auto w-10/12 flex flex-col text-gray-800 border rounded-lg bg-blue-300 border-gray-300 p-4 shadow-lg max-w-2xl">
           
            <div class=" flex flex-col justify-evenly ">
                <input type="text" class=" bg-blue-50 border rounded border-gray-300 p-2 mb-4 outline-none"  value="<?php echo $post['id']; ?>" name="id" readonly >
                <input class=" bg-blue-50 border rounded border--300 p-2  mb-4 outline-none"value="<?php echo $post['titre']; ?>" type="text" name="titre" >
            </div>
            <textarea class=" bg-gray-100 sec p-3 h-60 border border-gray-300 outline-none" name="contenu" > <?php echo $post['contenu']; ?> </textarea>
            
            <!-- buttons -->
            <div class="buttons mt-3 flex self-center ">
                <button class = " bg-white border-white focus:bg-gray px-3 mx-2 py-2 text-base font-normal rounded shadow " type="submit">Enrégistrer</button>
            </div>
        </div>
</form>
<?php } ?>