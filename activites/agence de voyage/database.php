<?php 

$host = 'localhost';
$port = 4306;
$dbname = 'agence_de_voyage';
$user = 'root';
$password = '';

$dsn = "mysql:host={$host};port={$port};dbname={$dbname};charset=utf8";

try{
    $pdo = new PDO($dsn, $user, $password);
    echo 'connection réussie';
}catch(PDOException $e){
    echo ' connection échoué :' . $e->getMessage();

}

?>