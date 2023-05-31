<?php
require_once "Humain.php";
class Chasseur extends Humain{
   private string $arme; 
   public function __construct($nom,$arme){
    parent::__construct($nom);
    $this->arme=$arme;
    echo "Le chasseur ".$this->nom." à été créer avec un(e) ".$this->arme.".<br>";
   }
   public function GetArme(){return $this->arme;}
   public function SetArme($arme){$this->arme=$arme;}
   public function Chasser($animal){
    $rand = rand(1,6);
    if($rand == 1 || $rand == 6){
        $animal->SetAlive(false);
        echo str_repeat("&nbsp", 12)."(\_/)<br>";
        echo str_repeat("&nbsp", 11)."(X_X)<br>";
        echo str_repeat("&nbsp", 10)."C(\")(\")<br>";
        echo "Le pauvre petit lapin ".$animal->GetColor()." est malheureusement mort.<br>";
    }
    else{    
        echo "$this->nom tire sur le lapin avec son/sa $this->arme est… le rate.<br>";
        echo "Le lapin est vivant.<br>";
        echo str_repeat("&nbsp", 12)."(\_/)<br>";
        echo str_repeat("&nbsp", 11)."(Ø_Ø)<br>";
        echo str_repeat("&nbsp", 10)."C(\")(\")<br>";
        $animal->fuir();
    }
   }
   
}
?>