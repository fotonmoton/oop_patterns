<?php

namespace Foton\Patterns\Factory\PizzaStore\AbstractFactory\Store;

use Foton\Patterns\Factory\PizzaStore\AbstractFactory\Pizza\AbstractPizza;

abstract class AbstractPizzaStore
{
    final public function orderPizza(string $type)
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    abstract public function createPizza(string $type) : AbstractPizza;
}
