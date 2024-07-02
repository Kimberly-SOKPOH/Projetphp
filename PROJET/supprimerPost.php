<script>
        
        function confirmSuppression(e) {
            event.preventDefault(event)
            if (confirm('Êtes-vous sûr de vouloir supprimer ce post?')){
                return true;
            }else{
            }
        }
    </script>
    
    
<?php 
session_start();
require "database.php";
 

    $idPost = $_GET["id"];
    $statement = $pdo->prepare('DELETE FROM posts WHERE id = :id');
    $statement->execute([
        ':id'=> $idPost,
    ]);
    header("location: affichage-nouveau.php");

?>

