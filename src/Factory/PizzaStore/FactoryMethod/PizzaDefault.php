<?php

namespace Foton\Patterns\Factory\PizzaStore\FactoryMethod;

class PizzaDefault extends AbstractPizza
{
    public function __construct()
    {
        $this->setTitle("Default pizza");
    }
}
