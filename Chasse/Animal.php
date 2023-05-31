<?php
require_once 'Interface.php';
require 
include
abstract class Animal implements IDeplacement{
   protected string $couleur; 
   protected int $nombrePatte;
   public function __construct($couleur,$nombrePatte){
    $this->couleur=$couleur;
    $this->nombrePatte=$nombrePatte;
   }
   public function GetColor(){return $this->couleur;}
   public function GetNombrePatte(){return $this->nombrePatte;}
   public function SetColor($couleur){$this->couleur=$couleur;}
   public function SetNombrePatte($nombrePatte){$this->nombrePatte=$nombrePatte;}
   public function crier(){
    echo "Le lapin ".Animal::GetColor()." glapie de peur.<br>";
   }
   public function SeDeplacer(){
    echo "Le lapin ".Animal::GetColor()." avance avec ";
    if(Lapin::GetNombrePatte()<2){
        echo "sa patte porte-bonheur.<br>";
    }
    else{
        echo "ses ".Lapin::GetNombrePatte()." pattes.<br>";
    }
}
}
?>