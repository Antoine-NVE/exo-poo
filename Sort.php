<?php

require_once './Elfe.php';
require_once './Dragon.php';
require_once './Chance.php';

class Sort extends Chance
{
    public function tirage(Elfe $elfe, Dragon $dragon): void
    {
        echo "Carte Sort, le dragon recule de 3 cases\n";
        $dragon->seDeplacer(-3);
    }
}
