<?php 
// local and global scope 
$nom = 'Mohamed';
// function sayHello(){
//     global $nom;
//     echo 'Hello '. $nom;
// }
// sayHello();

function sayHello($nom){
    echo 'Hello '. $nom;
}
sayHello($nom);

function somme($nombre_1, $nombre_2){
    return $nombre_1 + $nombre_2 ;
}

$sommeDeuxNombre = somme(2,4);
echo $sommeDeuxNombre . ' <br>';
