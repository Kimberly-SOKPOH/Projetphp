<?php 
  session_start();
  $loginError= '';
  if(isset($_SESSION['loginError'])){
    $loginError = $_SESSION['loginError'];
  } 
  require "database.php";
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
    

   <div class= " shadow-xl rounded-xl bg-blue-100 px-10 flex justify-between w-3/4  h-auto mx-auto my-28 py-10 ">
        <!-- texte d' invite -->
        <div class = "w-60 flex flex-col h-auto justify-between  ">
             <h1 class="font-bold  text-slate-900 text-4xl "> Vous avez déja un compte?</h1>
             <p class="font-bold text-black text-base  ">Entrez votre nom d'utilisateur et votre mot de passe pour acceder à votre page</p>
        </div>
          <!-- Formulaire d'insciption et de connection  -->
        <form class = "flex w-96 space-y-4  h-auto flex-auto flex-col" method="POST" action="connection.php">
              <label class=" font-bold text-slate-600  mx-5 text-base "  for="">User</label>
              <input class=" rounded border mx-5 px-2 h-8 focus:outline-none  border-indigo-600" type="text" name="user" placeholder="Nom" >
              <label class=" font-bold text-slate-600  mx-5 text-base "  for="psw">Password</label>
              <input class=" rounded border mx-5 px-2 h-8 focus:outline-none  border-indigo-600" type="password" name="motDePasse" placeholder="Mot de passe " autocomplete id="password" >
              <span class=" font-bold mx-5 text-base text-red-600 "><?php echo $loginError?></span>
              <button class = " bg-white border-white focus:bg-gray w-52 px-3 mx-auto py-2 text-base font-normal rounded shadow" name="connection" type="submit">Connexion</button>
        </form> 
    </div>
</body>
</html>