<?php

$fichier = 'test.txt';
// read from a file

$traiter = fopen($fichier, 'r');   /* 'r' = read et neccessite une autre fonction fread */

$data = fread($traiter, filesize($fichier));

echo $data;

fclose ($traiter);


// Write into a file

// $traiter = fopen('test1.txt', 'w');   /* 'w' = write et neccessite une autre fonction fwrite */
// $txt = "test writen into test1.txt";
// fwrite($traiter, $txt);
// fclose($traiter);

?>;
