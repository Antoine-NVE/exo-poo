<?php

require_once './Elfe.php';
require_once './Dragon.php';
require_once './Chance.php';

class Portauloin extends Chance
{
    public function tirage(Elfe $elfe, Dragon $dragon): void
    {
        echo "Carte Portauloin, l'Elfe avance de 3 cases\n";
        $elfe->seDeplacer(3);
    }
}
