<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

        <label for="">Id</label>
        <input type="text">

        <label for="">Titre</label>
        <input type="text">

        <label for="">Contenu</label>
        <input type="text">

        <input type="button" value="Envoyer">
    </form>

    <?php 
        var_dump($_POST['nom'])
        
    ?>

</body>
</html>