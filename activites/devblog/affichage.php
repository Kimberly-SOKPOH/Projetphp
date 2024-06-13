
<!-- ici c'est l'affichage de tous les posts fait -->

<?php

    require('../../cookie_section/cookie.php');


    require ('../PDO/Database.php');
    $statement = $pdo->prepare('SELECT * FROM articles');
    $statement->execute();
    $posts= $statement->fetchAll(PDO::FETCH_ASSOC); 
    // posts est ce que retourne la requete c'est a dire la table articles

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

    <div class="flex justify-between  grid-cols-3 gap-6 m-10 mb-10">
        <?php foreach ($posts as $post) : ?>
            <!-- post est un enregistrement de articles -->
        <article class="container bg-white shadow-2xl rounded-2xl p-5">
            <a href="post.php?id=<?php echo $post['id'];?>"><h1 class="font-bold text-yellow-500"><?php echo $post['titre']; ?></h1></a>
            <p class="font-light text-gray-500 mb-5 hover:font-bold"><?php echo $post['contenu']; ?></p>

        </article>
        <?php endforeach; ?>
    </div>
</body>
</html>