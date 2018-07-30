<?php

namespace Foton\Patterns\Factory\PizzaStore\SimpleFactory;

class PizzaGreek extends AbstractPizza
{
    public function __construct()
    {
        $this->setTitle("Greek pizza");
        $this->setPrice(10.2);
    }
}
