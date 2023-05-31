<?php
require_once "Chasseur.php";
require_once "Lapin.php";
require_once "Interface.php";

$chasseur1 = new Chasseur('Paul','Carabine');
$lapin1 = new Lapin('blanc',5,true);
$lapin2 = new Lapin('paon',1,true);

while ($lapin1->GetAlive() === true && $lapin2->GetAlive() === true) {
    // Actions à effectuer tant que le lapin est vivant
    if(rand(1,2)==1){
        $lapin1->seNourrir();
        $chasseur1->SeDeplacer();
        $lapin1->Crier();
        $lapin1->SeDeplacer();
        $chasseur1->Chasser($lapin1);
    }
    else{
        $lapin2->seNourrir();
        $chasseur1->SeDeplacer();
        $lapin2->Crier();
        $lapin2->SeDeplacer();
        $chasseur1->Chasser($lapin2);
    }
    
}

?>