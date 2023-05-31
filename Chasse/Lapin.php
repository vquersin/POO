<?php
require_once "Animal.php";
class Lapin extends Animal{
   private bool $enVie=true;
   public function __construct($couleur,$nombrePatte,$enVie){
    parent::__construct($couleur,$nombrePatte);
    $this->enVie=$enVie;
    echo "Le lapin $this->couleur à $this->nombrePatte pattes a été créer.<br>";
   }
   public function GetAlive(){return $this->enVie;}
   public function SetAlive($enVie){$this->enVie=$enVie;}
   public function seNourrir(){
    echo "Le lapin ".Animal::GetColor()." se nourri de bonnes baies.<br>";
    }
   public function fuir(){
    echo "Le lapin ".Animal::GetColor()." fuis à toute vitesse ";
    if(Lapin::GetNombrePatte()<2){
        echo "avec sa patte porte-bonheur.<br>";
    }
    else{
        echo "car il en a $this->nombrePatte pattes!<br>";
    }
    }
}
?>