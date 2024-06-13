<?php 
//  1st method
$nombre = [12, 34, 40];

// 2nd method
$stagiaires = array("Ahmed","Yasmin","Khalid") ;
echo $stagiaires[1]. '<br>';

$stagiaires[1]= "Said";
echo $stagiaires[1];

// les tableaux associatifs
$nombresTest = [0 => 12, 1 => 34, 2 => 40];
echo '<br>';
echo $nombresTest[2];

$etudiant = ['nom' => 'OUCHHH', 'prenom' => 'Zaqui', 'groupe' => 105];

$etudiants = [
    ['nom' => 'OUCHHH', 'prenom' => 'Zaqui', 'groupe' => 105],
    ['nom' => 'IIIDRI', 'prenom' => 'Maann', 'groupe' => 105],
    ['nom' => 'ALLAAD', 'prenom' => 'Trauz', 'groupe' => 105]
];
// $etudiant[4] = "test";
// $etudiants[] = "testtttt";

array_push($etudiants, ['nom' => 'FATII', 'prenom' => 'Looij', 'groupe' => 106]);

echo '<br>';
echo $etudiant['prenom'];
echo '<br>';
echo '<pre>';
var_dump ($etudiants);
echo '</pre>';