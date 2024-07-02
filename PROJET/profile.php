<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])){
    $target_dir = "image/";
    $target_img = $target_dir . basename($_FILES['image']["name"]);
    $_SESSION['imgNewprofile'] = move_uploaded_file($_FILES["image"]['tmp_name'], $target_img);
    header("location:affichage-nouveau.php");
    exit();
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Profile</title>
</head>

<body>
    <h2>Upload image</h2>
    <form enctype="multipart/form-data" method="post">
        <img src="" alt="">
        <input type="file" name="image" accept="image/*">
        <input type="submit" name="submit" value="upload image">

    </form>
</body>
</html>


