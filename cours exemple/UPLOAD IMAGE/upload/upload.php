
<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])){
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES['image']["name"]);

    move_uploaded_file($_FILES["image"]['tmp_name'], $target_file);
}

?>