<?php

// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon

require "classes/Personnage.php";
require "classes/Dragon.php";
require "classes/Princesse.php";

// Creation d'une instance de la classe personnage
$humain = new personnage();
$humain->setNom("Noah");
$humain->setVie(50);
echo "Nombre de vie du personnage: ".$humain->getVie();

// Creation d'une instance de la classe dragon
$dragon = new dragon();
$dragon->setVie(100);
echo "<br>Nombre de vie du dragon: ". $dragon->getVie();
$dragon->setNom("test");

$princesse = new Princesse(true);
$princesse->setX(450);
$princesse->setY(450);

