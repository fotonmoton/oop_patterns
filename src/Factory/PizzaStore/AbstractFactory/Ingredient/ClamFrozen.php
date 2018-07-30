<?php

namespace Foton\Patterns\Factory\PizzaStore\AbstractFactory\Ingredient;

class ClamFrozen extends AbstractClam
{
    public function __construct()
    {
        $this->setDescription("Frozen clam");
    }
}
