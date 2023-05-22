<?php

class Personnage{
    public $nom;
    public $taille;
    public $age;

    public function __construct($name,$taille,$age){
        $this->nom = $name;
        $this->taille = $taille;
        $this->age = $age;
    }
    public function setCharacterName($name){
        $this->nom = $name;
    }
    public function setCharacterTaille($taille){
        $this->taille = $taille;
    }
    public function setCharacterAge($age){
        $this->age = $age;
    }
    public function presentation(){
        echo "Hi, je suis $this->nom. Je suis agé de $this->age et je mesure $this->taille cm.";
    }
}
$personnage1 = new Personnage("Mario",140,31);
$personnage2 = new Personnage("Luigi",160,35);
$personnage3 = new Personnage("Peach",165,30);

$personnage1->presentation();
echo "<br/>";
$personnage2->presentation();
echo "<br/>";
$personnage3->presentation();
echo "<br/>";
?>