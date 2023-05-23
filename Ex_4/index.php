<?php
require_once "formation.php";
require_once "stagiaire.php";
$conca='';
$stagiaire1 = new Stagiaire('Lana',[10,5,8,18,12.75]);
$stagiaire2 = new Stagiaire('Andrea',[14.5,15.75,8,18,12.75]);
$stagiaire3 = new Stagiaire('Sanya',[20,20,20,20,20]);
$stagiaire4 = new Stagiaire('Svetlana',[18,17,15,18,20]);

echo $stagiaire1;
echo $stagiaire2;
echo $stagiaire3;
echo $stagiaire4;



$formation1 = new Formation('DWWM',365,array ($stagiaire1,$stagiaire2,$stagiaire3,$stagiaire4));
echo $formation1;


?>