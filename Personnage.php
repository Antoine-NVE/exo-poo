<?php

abstract class Personnage
{
    protected string $nom;
    protected int $position;

    // Lancer du dé
    public function lancer(): int
    {
        $lancer = rand(1, 6);
        echo "Le dé tombe sur $lancer\n";
        return $lancer;
    }

    abstract function seDeplacer(int $cases): void;

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPosition(): int
    {
        return $this->position;
    }
}
