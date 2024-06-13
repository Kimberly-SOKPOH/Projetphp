<?php 
  session_start();
  $loginError ="";
  if(isset($_SESSION['loginError'])){
    $loginError = $_SESSION['loginError'];
  } 
  require "index.php";
?>
      
   <div class= " shadow-xl rounded-xl bg-blue-100 px-10 flex justify-between w-3/4  h-auto mx-auto my-28 py-10 ">
        <!-- texte d' invite -->
        <div class = "w-60 flex flex-col h-auto justify-between  ">
             <h1 class="font-bold  text-slate-900 text-4xl "> Vous avez déja un compte?</h1>
             <p class="font-bold text-black text-base  ">Entrez votre nom d'utilisateur et votre mot de passe pour acceder à votre page</p>
        </div>
          <!-- Formulaire d'insciption et de connection  -->
        <form class = "flex w-96 space-y-4  h-auto flex-auto flex-col" method="POST" action="traitement-connection.php">
          
              <label class=" font-bold text-slate-600  mx-5 text-base "  for="">Nom d'utilisateur</label>
              <input class=" rounded border mx-5 px-2 h-8 focus:outline-none  border-indigo-600" type="text" name="nom" placeholder="Nom">
              <label class=" font-bold text-slate-600  mx-5 text-base "  for="psw">Mot de passe</label>
              <input class=" rounded border mx-5 px-2 h-8 focus:outline-none  border-indigo-600" type="password" name="motDePasse" placeholder="Mot de passe " autocomplete  >
              <span class=" font-bold mx-5 text-base text-red-600 "><?php echo $loginError?></span>
              <button class = " bg-white border-white focus:bg-gray w-52 px-3 mx-auto py-2 text-base font-normal rounded shadow" type="submit">Connexion</button>
            
        </form> 
    </div>
</body>
</html>


daisyui.com
