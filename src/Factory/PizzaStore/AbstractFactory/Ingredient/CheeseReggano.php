<?php

namespace Foton\Patterns\Factory\PizzaStore\AbstractFactory\Ingredient;

class CheeseReggano extends AbstractCheese
{
    public function __construct()
    {
        $this->setDescription("Reggano cheesse");
    }
}
