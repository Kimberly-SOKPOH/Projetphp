<?php 

class Utilisateur {

    public $annee = 2024 ;
    protected $nom ;
    protected $prenom ;

    public function __construct($nom, $prenom){
        $this->nom = $nom;
        $this->prenom =$prenom;
    }

    public function getNom($nom){
        return $this->nom ;   
    }

    public function getprenom( $prenom){
        return $this->prenom;
    }
    
    //setter
    public function setNom($nom){
        $this->nom = $nom;
    } 

    public function presentez_vous(){
        return "i am" . $this->nom . " ". $this->prenon;
    }

}

class etudiant extends utilisateur{
    public $branche;
    public $groupe;

    public function __construct($nom, $prenom,$branche, $groupe){
        parent::__construct($nom, $prenom);
        $this->branche = $branche;
        $this->groupe =$groupe;
    }

    public function presentez_vous(){
        return parent::presentez_vous(). " i am a student";
    }
}
// quand on a pas de constructeur
// $utilisateur1 = new Utilisateur();
// $utilisateur1->nom = "SOKPOH";
// $utilisateur1->prenom = "Kim";

$utilisateur2 = new Utilisateur("ALAWO","Godwin");
$utilisateur2->setNom("okkkkkl");

// echo '<pre>';
// var_dump ($utilisateur1->getNom());

echo '<pre>';
var_dump ($utilisateur2);


var_dump (Utilisation::$annee);
echo '</pre>';

?>