<?php

require_once './Elfe.php';
require_once './Dragon.php';
require_once './Chance.php';

class Fuite extends Chance
{
    public function tirage(Elfe $elfe, Dragon $dragon): void
    {
        echo "Carte Fuite, l'Elfe recule d'1 case\n";
        $elfe->seDeplacer(-1);
    }
}
