<?php

namespace Foton\Patterns\Factory\PizzaStore\SimpleFactory;

class PizzaCheese extends AbstractPizza
{
    public function __construct()
    {
        $this->setTitle("Cheezzzee pizza");
        $this->setPrice(10.2);
    }
}
