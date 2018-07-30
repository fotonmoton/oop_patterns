<?php

namespace Foton\Patterns\Factory\PizzaStore\FactoryMethod;

class PizzaNewYorkCheese extends AbstractPizza
{
    public function __construct()
    {
        $this->setTitle("New York cheeezzzzee pizza");
        $this->setPrice(20.5);
    }
}
