<?php

namespace Foton\Patterns\Factory\PizzaStore\FactoryMethod;

class PizzaStoreNewYork extends AbstractPizzaStore
{
    public function createPizza(string $type) : AbstractPizza
    {
        if ($type == 'cheese') {
            return new PizzaNewYorkCheese();
        }
        if ($type == 'greek') {
            return new PizzaNewYorkGreek();
        }

        return new PizzaDefault();
    }
}
