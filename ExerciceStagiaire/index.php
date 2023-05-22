<?php
require_once "stagiaire.php";
require_once "ville.php";

echo "---------------Stagiaire--------------- <br>";
$stagiaire1 = new Stagiaire('Marius',[10,5,8,18,12.75]);

$stagiaire1->calculerMoyenne();
$stagiaire1->trouverMax();
$stagiaire1->trouverMin();
echo "---------------------------------------------------------------------------------------------------------------------------------<br>";
echo "---------------Exercice.1/2--------------- <br>";
$ville1 = new Ville('Grande-Synthe',59);
$ville2 = new Ville('Calais',62);
$ville1->affichage();
$ville2->affichage();
echo "---------------------------------------------------------------------------------------------------------------------------------<br>";
echo "---------------Exercice.3--------------- <br>";
$people1 = new People('Coursevent','Sylvanas','Antre');
$people2 = new People('Murmevent','Tyrande','Hurlevent');
$people3 = new People('Wrym','Anduin','Hurlevent');

if(isset($_POST['nom3'])){
    $people3->setNomPeople($_POST['nom3']);
}
if(isset($_POST['prenom3'])){
    $people3->setPrenomPeople($_POST['prenom3']);
}
if(isset($_POST['adresse3'])){
    $people3->setAdressePeople($_POST['adresse3']);
}

$people1->infoPeople();
$people2->infoPeople();
$people3->infoPeople();

echo "<form method='POST'>
        <label for='nom3'>Nom :</label>
        <input type='text' name='nom3' value='" . $people3->getNomPeople() ."'><br>

        <label for='prenom3'>Prénom :</label>
        <input type='text' name='prenom3' value='" . $people3->getPrenomPeople() . "'><br>

        <label for='adresse3'>Adresse :</label>
        <input type='text' name='adresse3' value='" . $people3->getAdressePeople(). "'><br>

        <button type='submit'>Modifier le livre</button>

    </form>";
?>