
<!-- ici c'est supprimer un post precis  -->

<?php
// supprimer
$isValidDelete = $_SERVER['REQUEST_METHOD'] == "POST" &&  $_POST['_method'] ==='delete' && isset($_POST['id']);
if($isValidDelete){

    require ('../PDO/database.php');

    $statement = $pdo->prepare('DELETE FROM articles WHERE id = :id');
    $statement->execute([':id' => $_POST['id']]);

    header('Location:affichage.php');
}