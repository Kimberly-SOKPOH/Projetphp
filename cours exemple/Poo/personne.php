<?php

class personne{
    private $nom;
    private $prenom;
    private $age;

    public function __construct($nom ,$prenom ,$age){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    // getter magique
    public function __get($property){
        if(property_exists($this, $property)){
            return $this->$property;
        }
        return $this;
    }

    // setter magique
    public function __set($property, $value){
        if(property_exists($this, $property)){
            return $this->$property = $value;
        }
        return $this;
    }

    public function __tostring(){
        return 'You called the object '. $this->nom . ' '. $this->prenom;
    }

    public function __destruct(){
        return '';
    }



}
    
    // instanciation
$personne1 = new personne('Didat', 'Ahmed', 93); 
    // set nom $personne1
$personne1->nom = 'ELKHADILI';
 echo $personne1->nom;
    // get $personne1
$personne1->__tostring();
 echo '<br>'. $personne1;

    
    ?>