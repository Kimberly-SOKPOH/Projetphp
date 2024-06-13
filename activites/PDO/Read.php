<?php
//READ
require "database.php";

// prepare method
$statement = $pdo ->prepare('SELECT * FROM posts');

// executer la requete
$statement -> execute();

// Fetch data
$results = $statement -> fetchAll(PDO::FETCH_ASSOC);

echo'<pre>';

var_dump($results);

echo'</pre>';