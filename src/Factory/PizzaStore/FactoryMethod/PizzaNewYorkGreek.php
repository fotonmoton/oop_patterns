<?php

namespace Foton\Patterns\Factory\PizzaStore\FactoryMethod;

class PizzaNewYorkGreek extends AbstractPizza
{
    public function __construct()
    {
        $this->setTitle("New York greek pizza");
        $this->setPrice(20.22);
    }
}
