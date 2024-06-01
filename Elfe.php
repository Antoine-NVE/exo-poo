<?php

require_once './Personnage.php';
require_once './Sort.php';
require_once './Fuite.php';
require_once './Portauloin.php';

class Elfe extends Personnage
{
    public function __construct(private int $tentatives)
    {
        $this->nom = 'Elfe';
        $this->position = 0;
    }

    // Permet de tirer une carte Chance aléatoirement
    public function tireCarte(Elfe $elfe, Dragon $dragon): void
    {
        $rand = rand(0, 2);

        $cartes = [
            new Sort(),
            new Fuite(),
            new Portauloin()
        ];

        $carte = $cartes[$rand];
        $carte->tirage($elfe, $dragon);
    }

    // Permet de se déplacer et de gérer certains cas spéciaux
    function seDeplacer(int $cases): void
    {
        $this->position = $this->position + $cases;

        if ($this->position <= 0) {
            $this->position = 0;
            $this->tentatives--;
            echo "L'Elfe perd une tentative";
        }
        if ($this->position > 31) {
            $this->position = 31;
            die("L'Elfe a atteint le trésor\n");
        }

        echo "L'Elfe se trouve sur la case {$this->position}\n";
    }

    public function setTentatives($tentatives): void
    {
        $this->tentatives = $tentatives;
    }

    public function getTentatives(): int
    {
        return $this->tentatives;
    }
}
