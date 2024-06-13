from abc import  ABC, abstractmethod

<?php 

abstract class transport {
    public $idTrans;
    public $vitesse;
    public $capacité;
    public $nbr_de_place;
    public $occupe;
    public $montant;

    function __construct($idTrans ,$vitesse ,$capacité, $nbr_de_place,$occupe,$montant){

        $this->idTrans = $idTrans ;
        $this->vitesse = $vitesse ;
        $this->capacité = $capacité;
        $this->nbr_de_place = $nbr_de_place;
        $this->occupe = $occupe;
        $this->montant = $montant;

    }

    abstract function total();

    function info(){
        return " L'id est :" . $this->idTrans . ", la vitesse:" . $this->vitesse .", le nombre de place est : ".$this->nbr_de_place .", et la capacité est: " . $this->capacite.". Le montant est: ". montant() ;
    }

    function montant(){
        if($this->occupe == True){
           return $this->montant;
        } else {
            return "indisponible!";
        } 
    }

}

class autocar extends transport {
    public $marque;
    public $prix_ticket;

    function __construct($idTrans ,$vitesse ,$capacité, $nbr_de_place,$occupe,$montant,$marque,$prix_ticket){
        parent::__construct($idTrans ,$vitesse ,$capacité, $nbr_de_place,$occupe,$montant);
        $this->marque = $marque;
        $this->prix_ticket = $prix_ticket;
    }

}



?>