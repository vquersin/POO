<?php

class Formation{

    private $intitule;
    private $nbJours;
    // public static $stagiaires = [];
    private $stagiaires = [];

    private static $instances = [];

    // public function __construct(string $inputIntitule,int $inputNbJours, array $inputStagiaire){
    //     $this->intitule = $inputIntitule;
    //     $this->nbJours = $inputNbJours;
    //     foreach ($inputStagiaire as $stagiaire) {
    //         self::$stagiaires[] = $stagiaire;
    //     }
    // }
    public function __construct(string $inputIntitule, int $inputNbJours, array $inputStagiaires){
        $this->intitule = $inputIntitule;
        $this->nbJours = $inputNbJours;
        foreach ($inputStagiaires as $stagiaire) {
            $this->stagiaires[] = $stagiaire;
        }
        self::$instances[] = $this;
    }

    public function getIntitule(){return $this->intitule;}
    public function getNbJours(){return $this->nbJours;}

    public static function getInstances(){return self::$instances;}

    public function setIntitule($inputIntitule){return $this->intitule = $inputIntitule;}
    public function setNbJours($inputNbJours){return $this->nbJours = $inputNbJours;}

    public function __toString(){
        $txt = '';
        $txt .= 'La formation '.$this->intitule . '   nb jours : '.$this->nbJours; 
        foreach(/*self::$stagiaires*/$this->stagiaires as $stagiaire){
            $txt .= ' <br>Stagiaire : Nom: ' . $stagiaire->getNomStagiaire() . ' - Notes: ';
            $notes = $stagiaire->getNotesStagiaire();
            $txt .= implode(' | ', $notes);
        } 
        $txt.="<br>";
        return $txt;
    }
    
    public function calculerMoyenne(){
        $addition = 0;
        $count = 0;
        foreach (/*self::$stagiaires*/$this->stagiaires as $stagiaire) {
            foreach ($stagiaire->getNotesStagiaire() as $note) {
                $addition += $note;
                $count++;
            }
        }
        echo "La moyenne de la formation est de : " . round($addition / $count, 2) . "/20. <br>";
    }

    public function getIndexMax(){
        $maxAverage = -1; 
        $maxStagiaire = null; 
    
        foreach (/*self::$stagiaires*/$this->stagiaires as $stagiaire) {
            $addition = array_sum($stagiaire->getNotesStagiaire());
            $count = count($stagiaire->getNotesStagiaire());
            $average = round($addition / $count, 2);
    
            if ($average > $maxAverage) {
                $maxAverage = $average;
                $maxStagiaire = $stagiaire;
            }
        }
    
        if ($maxStagiaire != null) {
            echo "Le stagiaire ayant la meilleure moyenne est " . $maxStagiaire->getNomStagiaire() . " avec une moyenne de " . $maxAverage . "/20.<br>";
        } else {
            echo "Aucun stagiaire n'a été trouvé.";
        }
    }

    public function afficherNomMax(){
        $maxAverage = -1;
        $maxStagiaire = null; 

        foreach (/*self::$stagiaires*/$this->stagiaires as $stagiaire) {
            $addition = array_sum($stagiaire->getNotesStagiaire());
            $count = count($stagiaire->getNotesStagiaire());
            $average = round($addition / $count, 2);
    
            if ($average > $maxAverage) {
                $maxAverage = $average;
                $maxStagiaire = $stagiaire;
            }
        }
    
        if ($maxStagiaire != null) {
            echo "Le stagiaire ayant la meilleure moyenne est " . $maxStagiaire->getNomStagiaire().".<br>";
        } else {
            echo "Aucun stagiaire n'a été trouvé.";
        }
    }

    public function afficherMinMax(){
        $maxAverage = -1;
        $maxStagiaire = null;
    
        foreach (/*self::$stagiaires*/$this->stagiaires as $stagiaire) {
            $addition = array_sum($stagiaire->getNotesStagiaire());
            $count = count($stagiaire->getNotesStagiaire());
            $average = round($addition / $count, 2);
    
            if ($average > $maxAverage) {
                $maxAverage = $average;
                $maxStagiaire = $stagiaire;
            }
        }
        if ($maxStagiaire != null) {
            $minNote = min($maxStagiaire->getNotesStagiaire());
            echo "La plus petite note du meilleur stagiaire est " . $minNote . "/20.<br>";
        } else {
            echo "Aucun stagiaire n'a été trouvé.";
        }
    }
    
    public function trouverMoyenneParNom(string $nomStagiaire){
        $addition = 0;
        $count = 0;
        $foundStagiaire = false;

        foreach (/*self::$stagiaires*/$this->stagiaires as $stagiaire) {
            if ($stagiaire->getNomStagiaire() === $nomStagiaire) {
                foreach ($stagiaire->getNotesStagiaire() as $note) {
                    $addition += $note;
                    $count++;
                }
                $foundStagiaire = true;
                break;
            }
        }
        if ($foundStagiaire) {
            echo "La moyenne de $nomStagiaire est de : " . round($addition / $count, 2) . "/20. <br>";
        } else {
            echo "Le stagiaire $nomStagiaire n'a pas été trouvé.";
        }
    }
}
?>