
<!-- ici c'est l'affichage des detaillé d'un post -->

<?php 
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['id'])) {
       
        require ('../PDO/database.php');
        $statement = $pdo -> prepare('SELECT * FROM articles WHERE id =:id');
        $statement->execute([
            ':id' => $_GET['id']
        ]);

        $post = $statement->fetch(PDO::FETCH_ASSOC);
        // post est ce que retourne la requete c'est a dire l'enregistrement ayant ce id precis
    } 
} 

?>




<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200">
    <div class="m-10">
        <h1 class="text-yellow-500 text-center font-bold text-2xl tracking-wide">Blog en ligne</h1>
    </div>

    <div class="flex justify-between grid-cols-1 gap-6 m-10 mb-10">
        <?php

        ?>
      
        <article class="container bg-green-200 shadow-2xl rounded-2xl p-5">
            <h1 class="font-bold text-yellow-500"><?php echo $post['titre']; ?></h1>
            <p class="font-light text-gray-500 mb-5 hover:font-bold"><?php echo $post['contenu']; ?></p>
            <form action="supprimer_post.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                <input type="hidden" name="_method" value="delete">
                <input type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" value="Supprimer">
            </form>
            <form action="modifier_post.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                <input type="hidden" name="_method" value="update">
                <input type="submit"  class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" value="Modifier">

            </form>

        </article>
    </div>
</body>
</html>