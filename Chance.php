<?php

require_once './Elfe.php';
require_once './Dragon.php';

abstract class Chance
{
    abstract public function tirage(Elfe $elfe, Dragon $dragon): void;
}
