<?php

namespace Foton\Patterns\Factory\PizzaStore\SimpleFactory;

class PizzaDefault extends AbstractPizza
{
    public function __construct()
    {
        $this->setTitle("Default pizza");
    }
}
