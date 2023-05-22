<?php
class Voiture{

    private $marque;
    private $modele;
    public $annee;
    public $couleur;
    public $vitesse=0;

    public function __construct($marque,$modele){
        $this->marque = $marque;
        $this->modele = $modele;
    }

    // Setters 
    public function setAnnee($annee){
        $this->annee = $annee;
    }
    public function setCouleur($couleur){
        $this->couleur = $couleur;
    }
    public function setVitesse($vitesse){
        $this->vitesse = $vitesse;
    }

    // Getters
    public function getMarque(){return $this->marque;}
    public function getModele(){return $this->modele;}

    // Affichage
    public function affichage(){
        echo $this->marque. ' - ' . $this->modele. ' - ' . $this->annee. ' - ' . $this->couleur. ' - ' . $this->vitesse;
    }
    // Accelerer 
    public function accelerer($vitesseplus){
        $vitesseplus = intval($vitesseplus);
        $this->vitesse += $vitesseplus;
        
    }
    // Accelerer 
    public function Deccelerer($vitessemoins){
        $this->vitesse -= $vitessemoins;
    }
}

 ?>