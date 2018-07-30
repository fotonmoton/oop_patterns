<?php

namespace Foton\Patterns\Factory\PizzaStore\AbstractFactory\Ingredient;

class DoughThin extends AbstractDough
{
    public function __construct()
    {
        $this->setDescription("Thin dough");
    }
}
