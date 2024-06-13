<?php 
        // 1st method
        define('DB_Name' , 'gestion_stock');

        // 2nd method
        const PI = 3.14;

        $prenom = "YOUSSEF";
        $nom = "RAMANI";
        $idStudent = true;
        $age = 17 ;
        $note =  13.5;  

        $nombre1 = 20;
        $nombre2 = 14;
        $nombre3 = '10';

        $result = $nombre1 + $nombre3;

        $nombre3 = (bool)$nombre3;
        $nombre1 = (string)$nombre1;

        var_dump ($nombre3);

        echo'<br />' . $result;

        var_dump ($isStudent);
?>