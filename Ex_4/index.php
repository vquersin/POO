<?php
require_once "formation.php";
require_once "stagiaire.php";

$stagiaire1 = new Stagiaire('Lana',[10,5,8,18,12.75]);
$stagiaire2 = new Stagiaire('Andrea',[14.5,15.75,8,18,12.75]);
$stagiaire3 = new Stagiaire('Kathya',[20,20,18,20,20]);
$stagiaire4 = new Stagiaire('Svetlana',[18,17,15,18,20]);


$formation1 = new Formation('DWWM',365,[$stagiaire3,$stagiaire4]);
echo $formation1;
$formation1->calculerMoyenne();
$formation1->getIndexMax();
$formation1->afficherNomMax();
$formation1->afficherMinMax();
$formation1->trouverMoyenneParNom('Svetlana');
echo "---------------------------------------------------------<br>";
$formation2 = new Formation('Kitchen',25,[$stagiaire1,$stagiaire2]);
echo $formation2;
$formation2->calculerMoyenne();
$formation2->getIndexMax();
$formation2->afficherNomMax();
$formation2->afficherMinMax();
$formation2->trouverMoyenneParNom('Svetlana');
?>