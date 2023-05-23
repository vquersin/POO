<?php

class Formation{
    private $intitule;
    private $nbJours;
    public static $stagiaire;

    public function getIntitule(){return $this->intitule;}
    public function getNbJours(){return $this->nbJours;}

    public function setIntitule($inputIntitule){return $this->intitule = $inputIntitule;}
    public function setNbJours($inputNbJours){return $this->nbJours = $inputNbJours;}

    public function __construct(string $inputIntitule,int $inputNbJours, array $inputStagiaire){
        $this->intitule = $inputIntitule;
        $this->nbJours = $inputNbJours;
        self::$stagiaire[] = $this;
    }

    public function __toString(){
        $txt = '';
        $txt = 'La formation '.$this->intitule . '   nb jours : '.$this->nbJours;  
        foreach($stagiaire as $key =>$value){
            echo $value;
            // foreach($nom as $key =>$value){
            //     $txt = 'stagiaire :'.$value;
            // }
        }
        
    }

}

?>