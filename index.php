<?php

require_once './Elfe.php';
require_once './Dragon.php';

// On demande le nombre de tentatives
$tentatives = (int)readline('Nombre de tentatives de l\'Elfe : ');
if ($tentatives <= 0) {
    die('La valeur doit être un entier supérieur à 0.');
}

// On initialise les 2 personnages
$elfe = new Elfe($tentatives);
$dragon = new Dragon();

// La boucle tourne tant qu'il reste des tentatives à l'Elfe
while ($elfe->getTentatives() > 0) {
    // L'Elfe lance le dé
    echo "\nAu tour de l'Elfe :\n";
    $elfe->seDeplacer($elfe->lancer());

    // On vérifie si les deux personnages se rencontrent
    if ($elfe->getPosition() === $dragon->getPosition()) {
        echo "L'Elfe arrive sur la case où est présent le Dragon, il tire une carte\n";
        $elfe->tireCarte($elfe, $dragon);
    }

    // Le Dragon lance le dé
    echo "\nAu tour du Dragon :\n";
    $dragon->seDeplacer($dragon->lancer());

    // On vérifie si les deux personnages se rencontrent
    if ($elfe->getPosition() === $dragon->getPosition()) {
        echo "Le Dragon arrive sur la case où est présent l'Elfe, ce dernier lance le dé\n";

        // Si l'Elfe obtient 3 ou moins, il recule de 2 cases, sinon il tire une carte Chance
        if ($elfe->lancer() <= 3) {
            echo "L'Elfe recule de 2 cases\n";
            $elfe->seDeplacer(-2);
        } else {
            echo "L'Elfe tire une carte\n";
            $elfe->tireCarte($elfe, $dragon);
        }
    }
}

// Si l'Elfe n'a plus de tentatives
die("L'Elfe a épuisé ses tentatives");
