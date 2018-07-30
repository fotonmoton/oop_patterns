<?php

namespace Foton\Patterns\Factory\PizzaStore\AbstractFactory\Pizza;

class PizzaDefault extends AbstractPizza
{
    public function prepare()
    {
        $this->dough = $this->ingredientFactory->createDough();
        $this->cheese = $this->ingredientFactory->createCheesse();
    }
}
