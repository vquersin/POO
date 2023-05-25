<?php
    class Zombie extends Personnage {
    private $level;
    private $vitesse;

    public function __construct($nom, $classe, $attaque, $pv, $forceDuBien, $level, $vitesse) {
        parent::__construct($nom, $classe, $attaque, $pv, $forceDuBien);
        $this->level = $level;
        $this->vitesse = $vitesse;            
    }

    public function __toString() {
        $txt = "";
        $txt .= parent::__toString();
        $txt .= "Level: " . $this->level . " et une vitesse de " . $this->vitesse . "<br>";
        return $txt;  
    }
}


 ?>