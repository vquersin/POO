<?php
class Stagiaire{
    private $nom;
    private $notes = [];

    public function getNomStagiaire($nom){ return $this->nom; }
    public function getNotesStagiaire($notes){ return $this->notes; }

    public function setNomStagiaire($nom){
        $this->nom = $nom;
    }

    public function setNotesStagiaire($notes){
        $this->notes = $notes;
    }

    public function __construct(string $nom , array $notes){
        $this->nom = $nom;
        $this->notes = $notes;
    }

    public function calculerMoyenne(){
        $addition = 0;
        foreach($this->notes as $key => $value){
            $addition += $value;
        }
        echo "La moyenne de $this->nom est de : ". round($addition/count($this->notes), 2). "/20. <br>";
    }

    public function trouverMax(){
        $valeurG = -1;
        foreach($this->notes as $key => $value){
            if($value > $valeurG){
                $valeurG = $value;
                $position = $key+1;
            }
        }
        echo "La note la plus haute est: ".$valeurG. "/20.<br>";
    }

    public function trouverMin(){
        $valeurP = 21;
        foreach($this->notes as $key => $value){
            if($value < $valeurP){
                $valeurP = $value;
                $position = $key+1;
            }
        }
        echo "La note la plus basse est: ".$valeurP. "/20. <br>";
    }
}
?>