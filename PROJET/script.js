
// ici le script qui va afficher des formulaires diffrerents selon qu'on click sur connection ou inscription


// declaration
document.addEventListener("DOMContentLoaded",FormConnection);
document.getElementById('connection').addEventListener("click",FormConnection)
document.getElementById('inscription').addEventListener("click",FormInscrption)



// fonctions
function FormConnection(){

    console.log('Great')
    let afficheForm = document.getElementById('formplace');
    let form = `<div class= " shadow-xl rounded-xl bg-blue-100 px-10 flex justify-between w-3/4  h-auto mx-auto my-28 py-10 ">
    <!-- texte d' invite -->
    <div class = "w-60 flex flex-col h-auto justify-between  ">
         <h1 class="font-bold  text-slate-900 text-4xl "> Vous avez déja un compte?</h1>
         <p class="font-bold text-black text-base  ">Entrez votre nom d'utilisateur et votre mot de passe pour acceder à votre page</p>
    </div>
      <!-- Formulaire d'insciption et de connection  -->
    <form class = " flex " action="POST">
        <div class=" w-96 space-y-4 flex h-auto flex-auto flex-col  ">
          <label class=" font-bold text-slate-600  mx-5 text-base "  for="">Nom d'utilisateur</label>
          <input class=" rounded border mx-5 px-2 h-8 focus:outline-none  border-indigo-600" type="text" name="nom" placeholder="Nom" id="name">
          <label class=" font-bold text-slate-600  mx-5 text-base "  for="psw">Mot de passe</label>
          <input class=" rounded border mx-5 px-2 h-8 focus:outline-none  border-indigo-600" type="password"" name="motDePasse" placeholder="Mot de passe " id="password" autocomplete >

          <button id="btn_connection" class = "bg-white border-white focus:bg-gray w-52 px-3 mx-auto py-2 text-base font-normal rounded shadow " type="button">Connexion</button>
        </div>
    </form> 
</div>`
afficheForm.innerHTML = form;
document.getElementById('body').append(afficheForm);

document.querySelector('#btn_connection').addEventListener("click", AffichagePage)

function AffichagePage(){
    // ajouter une condition avant redirection
   console.log('affiché');
    window.location ='affichage.php';

}
}


function FormInscrption(){
     
    let afficheForm = document.getElementById('formplace');
    let formI = `<div class= " shadow-xl rounded-xl bg-blue-100 px-10 flex justify-between w-3/4  h-auto mx-auto my-28 py-10 ">
    <!-- texte d' invite -->
    <div class = "w-60 flex flex-col h-auto justify-around">
         <h1 class="font-bold text-slate-900 text-4xl "> Créez votre compte ici!  </h1>
         <p class="font-bold text-black text-base ">Entrez vos identifiants pour créer votre compte.</p>
    </div>
      <!-- Formulaire d'insciption et de connection  -->
    <form class = "flex "method="POST" action="traitement-inscription.php">
        <div class=" w-96 space-y-4 flex h-auto flex-auto flex-col  ">
          <label class=" font-bold text-slate-600  mx-5 text-base " for="nom">Nom d'utilisateur</label>
          <input class=" rounded border mx-5 px-2 h-8 focus:outline-none  border-indigo-600" type="text" name="nom" placeholder="Nom..." id="name">
          <label class=" font-bold text-slate-600  mx-5 text-base "  for="prenom">Prénom </label>
          <input class=" rounded border mx-5 px-2 h-8 focus:outline-none  border-indigo-600" type="text" name="prenom" placeholder="Prénom..." id="prenom">
          <label class=" font-bold text-slate-600  mx-5 text-base " for="nom">Email</label>
          <input class=" rounded border mx-5 px-2 h-8 focus:outline-none  border-indigo-600" type="mail" name="email" placeholder="xx@gmail.com..." id="mail">
          <label class=" font-bold text-slate-600  mx-5 text-base "  for="psw">Mot de passe</label>
          <input class=" rounded border mx-5 px-2 h-8 focus:outline-none  border-indigo-600" type="password" name="motDePasse"  placeholder="Mot de passe " id="password" autocomplete>
          <label class=" font-bold text-slate-600  mx-5 text-base "  for="psw">Confirmation du mot de passe </label>
          <input class=" rounded border mx-5 px-2 h-8 focus:outline-none  border-indigo-600" type="password" name="confirmation" placeholder="..." id="confirmer_password" autocomplete>

          <button id="btn_connection" class = " bg-white border-white focus:bg-gray w-52 px-3 mx-auto py-2 text-base font-normal rounded shadow " name="inscription" type="button">Inscription</button>
        </div>
    </form> 
</div>`
afficheForm.innerHTML = formI
document.getElementById('body').append(afficheForm);

document.querySelector('#btn_connection').addEventListener("click", run_traitement_inscription)

function run_traitement_inscription(){
  console.log('traitement')
  window.location ='traitement-inscription.php'
    

  
}

}



function createPost(){
    
}







