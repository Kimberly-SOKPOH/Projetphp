<?php 

// les dates en php
$today = date('F j, Y, g:i a');       //March 10, 2001, 5:16 pm
$today = date('m.d.y');               //03.10.01
$today = date('j, n, Y');            //10 , 3, 2001
$today = date('Ymd');                // 20010310 
$today = date('h-i-s, j-m-y, it is w Day');  //05-16-18, 10-03-01 1631
$todaychiffre = date('d'); 
$todaychiffre = date('d'); 
$todayJour = date('D');
$todaychiffre = date('d'); 
$todaychiffre = date('d'); 
$todayJour = date('D');
$todaychiffre = date('d'); 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
  
    <title>Document</title>
</head>
<body id="body">
    
    <!-- header -->
    <header class="2xl:container 2xl:mx-auto">
            <div class="bg-blue-300 shadow-lg py-5 px-7">
                <nav class="flex justify-between">
                    <div class="flex items-center space-x-3 lg:pr-16 pr-6">                       
                        <h2 class=" font-normal text-4xl  leading-15 text-white">MyBlog</h2>
                    </div>
                    <ul class=" md:flex  space-x-2">
                        <button class = " bg-white border-white focus:bg-gray px-3  py-2 text-base font-normal rounded shadow " id="connection" type="button">Se connecter</button>
                        <button class = " bg-white border-white focus:bg-gray px-3  py-2 text-base font-normal rounded shadow " id="inscription" type="button">S'inscrire</button>
                    </ul>
                </nav>  
            </div>
    </header>

    <p> <?php echo $today ?> </p>

