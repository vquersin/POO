<?php 
require_once "voiture.php";

$voiture1 = new Voiture("BMW", "THE I7");
$voiture2 = new Voiture("Renault", "Rafale");

echo "<div>";
$voiture1->affichage();
echo "<br>";
$voiture2->affichage();
echo "</div>";

$voiture1->accelerer(5);
echo "<div>";
$voiture1->affichage();
echo "<br>";
$voiture2->affichage();
echo "</div>";


if(isset($_POST['Accel'])) {
    $voiture1->accelerer($_POST['Accel']); 
}
if(isset($_POST['Deccel'])) {
    $voiture1->Deccelerer($_POST['Deccel']);
}

echo "<form method='GET'>
    <button type='submit' name='Accel' value='7'>Accelerer</button>
    <button type='submit' name='Deccel' value='5'>Deccelerer</button>
</form>";
?>