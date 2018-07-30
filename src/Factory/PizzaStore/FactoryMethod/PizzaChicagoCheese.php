<?php

namespace Foton\Patterns\Factory\PizzaStore\FactoryMethod;

class PizzaChicagoCheese extends AbstractPizza
{
    public function __construct()
    {
        $this->setPrice(25);
        $this->setTitle("Chicago cheese pizza");
    }
}
