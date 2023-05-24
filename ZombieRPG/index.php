<?php
    require_once "Personnage.php";
    require_once "Humain.php";
    require_once "zombie.php";
    $personnage1 = new Humain("Toto","Guerrier",10,100,true,2);
    $personnage2 = new Humain("Tata","Archère",5,50,true,3);
    $personnage3 = new Humain("Titi","Archère",5,55,false,2);
    $personnage4 = new Humain("Riri","Voleur",2,10,false,1);

    $zombie1 = new Zombie("Roaawwwrrr","Guerrier squelettique",2,60,false,2,2);
    $zombie2 = new Zombie("Oof","Archer squelettique",15,20,false,4,4);
    $zombie3 = new Zombie("powpowpow","Prêtre squelettique",2,30,false,2,3);
    $zombie4 = new Zombie("Youpla","Loup squelettique",5,50,false,2,4);
    $zombie5 = new Zombie("fiuuuuuuuu","Moine squelettique",8,60,false,2,5);

    echo $personnage1;
    echo "*************************<br>";
    echo $personnage2;
    echo "*************************<br>";
    echo $personnage3;
    echo "*************************<br>";
    echo $personnage4;
    echo "*************************<br>";
    echo $zombie1;
    echo "*************************<br>";
    echo $zombie2;
    echo "*************************<br>";
    echo $zombie3;
    echo "*************************<br>";
    echo $zombie4;
    echo "*************************<br>";
    echo $zombie5;
    echo "*************************<br>";
    echo "Voici les stats de " .  $personnage1->nom . " : <br>";
    $personnage1->modifStats(50,200);


 ?>