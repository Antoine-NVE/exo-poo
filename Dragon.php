<?php

require_once './Personnage.php';

class Dragon extends Personnage
{
    public function __construct()
    {
        $this->nom = 'Dragon';
        $this->position = 31;
    }

    // Permet de se déplacer et de gérer certains cas spéciaux
    function seDeplacer(int $cases): void
    {
        $this->position = $this->position - $cases;

        if ($this->position < 0) {
            $this->position = 0;
        }
        if ($this->position > 31) {
            $this->position = 31;
        }

        echo "Le Dragon se trouve sur la case {$this->position}\n";
    }
}
