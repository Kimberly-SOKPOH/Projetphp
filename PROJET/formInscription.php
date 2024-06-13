<?php 
  require "index.php";
?>

<div class= " shadow-xl rounded-xl bg-blue-100 px-10 flex justify-between w-3/4  h-auto mx-auto my-28 py-10 ">
    <!-- texte d' invite -->
    <div class = "w-60 flex flex-col h-auto justify-around">
         <h1 class="font-bold text-slate-900 text-4xl "> Créez votre compte ici!  </h1>
         <p class="font-bold text-black text-base ">Entrez vos identifiants pour créer votre compte.</p>
    </div>
      <!-- Formulaire d'insciption et de connection  -->
    <form class = "flex" action="traitement-inscription.php" method="POST" >
        <div class=" w-96 space-y-4 flex h-auto flex-auto flex-col  ">
          <label class=" font-bold text-slate-600  mx-5 text-base " for="nom">Nom d'utilisateur</label>
          <input class=" rounded border mx-5 px-2 h-8 focus:outline-none  border-indigo-600" type="text" name="nom" placeholder="Nom..." id="name" required>
          <label class=" font-bold text-slate-600  mx-5 text-base "  for="prenom">Prénom </label>
          <input class=" rounded border mx-5 px-2 h-8 focus:outline-none  border-indigo-600" type="text" name="prenom" placeholder="Prénom..." id="prenom" required>
          <label class=" font-bold text-slate-600  mx-5 text-base " for="nom">Email</label>
          <input class=" rounded border mx-5 px-2 h-8 focus:outline-none  border-indigo-600" type="mail" name="email" placeholder="xx@gmail.com..." id="mail" required >
          <label class=" font-bold text-slate-600  mx-5 text-base "  for="psw">Mot de passe</label>
          <input class=" rounded border mx-5 px-2 h-8 focus:outline-none  border-indigo-600" type="password" name="motDePasse"  placeholder="Mot de passe " id="password" required autocomplete>
          <label class=" font-bold text-slate-600  mx-5 text-base "  for="psw">Confirmation du mot de passe </label>
          <input class=" rounded border mx-5 px-2 h-8 focus:outline-none  border-indigo-600" type="password" name="confirmation" placeholder="..." id="confirmer_password" required autocomplete>

          <button class = " bg-white border-white focus:bg-gray w-52 px-3 mx-auto py-2 text-base font-normal rounded shadow " name="inscription" >Inscription</button>
        </div>
    </form> 
</div>

</body>
</html>