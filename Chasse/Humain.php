<?php
require_once 'Interface.php';
abstract class Humain implements IDeplacement{
   protected string $nom;
   public function __construct($nom){
    $this->nom=$nom;
   }
   public function GetName(){return $this->nom;}
   public function SetName($nom){$this->nom=$nom;}
   public function SeDeplacer(){
    echo Humain::GetName()." avance avec son/sa ".Chasseur::GetArme().".<br>";
    }
}
?>