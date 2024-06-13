<?php 
$nom = $_GET["nom"] ?? '';

// var_dump ($nom);

// var_dump ($id);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">

        <label for="nom">Nom :</label>
        <input name="nom" id="nom" type="text">
        <br><br>

        <label for="prenom">Prenom :</label>
        <input name="prenom" id="prenom" type="text">
        <br><br>

        <input type="submit" value="Envoyer">
        <?php 
            $nom = $_GET['nom'];
            $prenom =$_GET['prenom'];
        ?>

    </form>

    <form action="" method="post">

    <input type="submit" value="Télécharger">
        <?php 
           var_dump($_POST['nom'])
        ?>
    </form>
</body>
</html>