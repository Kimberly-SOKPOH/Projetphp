<?php

// utiliser des donnees json en php

header('Content-Type: application/json');

$json = file_get_contents("php://imput");

$data = json_decode($json, true );

if($data === null ){
    echo json_encode(['error' => 'Invalid JSON']);
} else {
    $id = $data['id'];
    $title = $data['title'];
    $body = $data['body'];

    $statement = $pdo->prepare('');

}

?>