
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
        <div class = "w-60 flex flex-col h-auto justify-around">
            <h1 class="font-bold text-slate-900 text-4xl "> Créez votre compte ici!  </h1>
            <p class="font-bold text-black text-base ">Entrez vos identifiants pour créer votre compte.</p>
        </div>
        <!-- Formulaire d'insciption et de connection  -->
        <form class = "flex" action="traitement-inscription.php" method="POST" >
            <div class=" w-96 space-y-4 flex h-auto flex-auto flex-col  ">
            <label class=" font-bold text-slate-600  mx-5 text-base " for="nom">Ville de départ</label>
            <input class=" rounded border mx-5 px-2 h-8 focus:outline-none  border-indigo-600" type="text" name="villedepart" placeholder="Nom..." id="name" required>
            <label class=" font-bold text-slate-600  mx-5 text-base "  for="prenom">Ville d'arrivée </label>
            <input class=" rounded border mx-5 px-2 h-8 focus:outline-none  border-indigo-600" type="text" name="villearrive" placeholder="Prénom..." id="prenom" required>
            <label class=" font-bold text-slate-600  mx-5 text-base " for="nom">date de voyage</label>
            <input class=" rounded border mx-5 px-2 h-8 focus:outline-none  border-indigo-600" type="date" name="date" placeholder="xx@gmail.com..." id="mail" required >
            <label class=" font-bold text-slate-600  mx-5 text-base "  for="psw">Nombre de personnes</label>
            <input class=" rounded border mx-5 px-2 h-8 focus:outline-none  border-indigo-600" type="number" name="nbrepersonne"  placeholder="Mot de passe " id="password" required autocomplete>
            

            <button class = " bg-white border-white focus:bg-gray w-52 px-3 mx-auto py-2 text-base font-normal rounded shadow " name="inscription" >Inscription</button>
            </div>
        </form> 
    </div>

</body>
</html>