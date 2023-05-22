<?php
class Ville{
    private $nom;
    private $dp;

    public function getNomVille($nom){return $this->nom;}
    public function getDpVille($dp){return $this->dp;}

    public function __construct($nom,$dp){
        $this->nom = $nom;
        $this->dp = $dp;
    }

    public function Affichage(){
        echo ucfirst($this->nom)." est dans le département $this->dp.<br>" ;
    }
}

class People{
    private $nomPeople;
    private $prenomPeople;
    private $adressePeople;

    public function __construct($nomPeople,$prenomPeople,$adressePeople){
        $this->nomPeople = $nomPeople;
        $this->prenomPeople = $prenomPeople;
        $this->adressePeople = $adressePeople;
    }

    public function setNomPeople($nomPeople){
        $this->nomPeople = $nomPeople;
    }

    public function setPrenomPeople($prenomPeople){
        $this->prenomPeople = $prenomPeople;
    }

    public function setAdressePeople($adressePeople){
        $this->adressePeople = $adressePeople;
    }

    public function getNomPeople(){return $this->nomPeople;}
    public function getPrenomPeople(){return $this->prenomPeople;}
    public function getAdressePeople(){return $this->adressePeople;}

    public function infoPeople(){
        echo " | Nom: ".ucfirst($this->nomPeople)." | Prénom: ".ucfirst($this->prenomPeople)." | Adresse: ".ucfirst($this->adressePeople)." |<br>";
    }

    // public function __destruct(){
    //     echo 'Destroy !<br>';
    // }
}
?>