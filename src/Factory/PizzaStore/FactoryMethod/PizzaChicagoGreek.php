<?php

namespace Foton\Patterns\Factory\PizzaStore\FactoryMethod;

class PizzaChicagoGreek extends AbstractPizza
{
    public function __construct()
    {
        $this->setTitle("Chicago greek pizza");
        $this->setPrice(10.22);
    }
}
