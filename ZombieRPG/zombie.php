<?php
    class Zombie extends Personnage{
        private $level;
        private static $vitesse;

        public function __construct($nom,$classe,$attaque,$pv,$forceDuBien,$level,$vitesse){
            parent::__construct($nom,$classe,$attaque,$pv,$forceDuBien);
            $this->level = $level;
            self::$vitesse = $vitesse;            
        }
        public function getVitesse(){return self::$vitesse;}

        public function __toString(){

            $txt = "";
            $txt .= parent::__toString();
            $txt .= "Level : " . $this->level . "  et une vitesse de ". self::$vitesse ."<br>";
            return $txt;  
        }
    }
 ?>