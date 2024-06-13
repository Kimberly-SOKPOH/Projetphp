<?php 

$host="localhost";
$port=3306;
$dbname="reservation_hotel";
$user="root";
$password="";

$dsn = "mysql:host={$host};port={$port};dbname={$dbname};charset=utf8";

try {
    $statement = new PDO($dsn, $user, $password);
    echo 'connection reussie';
}catch(PDOExeption $e){
    echo 'connection echoué'; $e;
};

?>