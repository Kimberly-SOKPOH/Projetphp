<!-- ici c'est ce qui ce passe lors de la publication d'un post -->

<?php
    require ('../PDO/Database.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $identifiant = $_POST['id'];
        $titre = $_POST['titre'];
        $contenu = $_POST['contenu'];

        $statement = $pdo ->prepare('INSERT INTO articles(id, titre, contenu) VALUES (:id, :titre, :contenu)');


        $statement -> execute([
            ':id' => $identifiant,
            ':titre' => $titre,
            ':contenu' => $contenu,
        ]);
    }


    header("Location: affichage.php");
    exit();


// $statement = $pdo ->prepare('SELECT * FROM articles');


// // executer la requete
// $statement -> execute();


// // Fetch data
// $results = $statement -> fetchAll(PDO::FETCH_ASSOC);


// echo'<pre>';

// var_dump($results);

// echo'</pre>';

?>